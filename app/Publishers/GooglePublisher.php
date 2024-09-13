<?php

namespace App\Publishers;

use Illuminate\Support\Facades\Http;
use App\Modules\GoogleClient;

class GooglePublisher
{
    const ENDPOINT_BASE_V1 = "https://mybusiness.googleapis.com/v1/";

    const ENDPOINT_BASE_V4 = "https://mybusiness.googleapis.com/v4/";

    const READ_MARK_V1 = [
        'name',
        'title',
        'storeCode',
        'languageCode',
        'phoneNumbers',
        'storefrontAddress',
        'websiteUri',
        'regularHours',
        'specialHours',
        'serviceArea',
        'labels',
        'categories',
        'adWordsLocationExtensions',
        'latlng',
        'openInfo',
        'metadata',
        'profile',
        'relationshipData',
        'moreHours',
        'serviceItems',
    ];

    protected $client;

    public function __construct(GoogleClient $client)
    {
        $this->client = $client->getClient();
    }

    public function getAccessToken()
    {
        $accessToken = $this->client->getAccessToken()['access_token'];
        return $accessToken;
    }

    public function getAccount()
    {
        $accessToken = $this->client->getAccessToken()['access_token'];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get(self::ENDPOINT_BASE_V1 . "accounts");

        $data = json_decode($response->getBody());


        return $data;
    }

    public function getLocation($inputs)
    {
        $data = [];

        if (!empty($inputs)) {
            $accessToken = $this->client->getAccessToken()['access_token'];
            $readMark = implode(',', self::READ_MARK_V1);

            if(empty($inputs->accounts[0])) return $data;

            $url = self::ENDPOINT_BASE_V1 . $inputs->accounts[0]->name . "/locations?readMask=$readMark";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($url);

            $data = json_decode($response->getBody());
        }

        return $data;
    }

    public function getLocationWithDirection($direction, $pageSize = '', $nextPageToken = '')
    {
        try {
            if (empty($direction)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];
            $readMark = implode(',', self::READ_MARK_V1);

            $url = self::ENDPOINT_BASE_V1 . "$direction/locations/?readMask=$readMark";

            if($pageSize) {
                $url .= "&pageSize=$pageSize";
            } 
            
            if($nextPageToken) {
                $url .= "&pageToken=$nextPageToken";
            }

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($url);

            $data = json_decode($response->getBody());

            return $data;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getBatchGetReviewsLocations($inputs, $direction)
    {
        try {
            if (empty($direction)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];
            $url = self::ENDPOINT_BASE_V4 . "$direction/locations:batchGetReviews";

            $allReviews = []; 
            $nextPageToken = null;

            do {
                $inputs['pageToken'] = $nextPageToken;

                $response = Http::contentType("text/plain")
                    ->withHeaders([
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer ' . $accessToken,
                    ])
                    ->send('POST', $url, [
                        'body' => json_encode($inputs),
                    ]);

                $data = json_decode($response->getBody(), true);

                if (isset($data['locationReviews'])) {
                    // Append the reviews to the allReviews array
                    foreach($data['locationReviews'] as $item) {
                        $allReviews[] = $item;
                    }
                }

                // Check if there's a nextPageToken for the next page of results
                $nextPageToken = $data['nextPageToken'] ?? null;

            } while ($nextPageToken);

            return $allReviews;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getReviewsLocation($direction)
    {
        try {
            if (empty($direction)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];

            $url = self::ENDPOINT_BASE_V4 . "$direction/reviews";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($url);

            $data = json_decode($response->getBody());

            return $data;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function replyReviews($data)
    {
        try {
            if (empty($data)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];
            
            $res = [];

            foreach($data as $reviewId => $comment) {
                $url = self::ENDPOINT_BASE_V4 . $reviewId . '/reply';
                $response = Http::contentType("text/plain")
                ->withHeaders([
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $accessToken,
                ])
                ->send('PUT', $url, [
                    'body' => json_encode([
                        'comment' => $comment
                    ])
                ]);

                $res[] = json_decode($response->getBody());

                \Log::channel('replies')->info(print_r($res, true));
            }

            return $res;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
