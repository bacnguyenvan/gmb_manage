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

    public function getLocationWithDirection($direction)
    {
        try {
            if (empty($direction)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];
            $readMark = implode(',', self::READ_MARK_V1);

            $url = self::ENDPOINT_BASE_V1 . "$direction/locations/?readMask=$readMark";

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

    public function getBatchGetReviewsLocations($direction)
    {
        try {
            if (empty($direction)) {
                return [];
            }

            $accessToken = $this->client->getAccessToken()['access_token'];

            $url = self::ENDPOINT_BASE_V4 . "$direction/locations:batchGetReviews";

            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $accessToken,
            ])->post($url);

            $data = json_decode($response->getBody());

            return $data;
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
}
