<?php

namespace App\Services;

use Illuminate\Validation\ValidationException;

use App\Modules\GoogleClient;


class GMBService
{
    /**
     *  Grant permission access google my business
     */
    public function getClient()
    {
        $client = new \Google_Client();

        $appUrl = config('app.url');

        $client->setScopes(['https://www.googleapis.com/auth/business.manage']);
        $client->setAuthConfig(config('google-api.client_path')); // credentials.json
        $client->setAccessType('offline'); // return refresh-token
        $url = $appUrl . '/gmb/callback';

        // dd($url);
        $client->setRedirectUri($url);
        $client->setApprovalPrompt("force"); // turn on when refresh-token not show

        return $client;
    }

    public function runGetToken(\Google_Client $client, $credentialsPath, $request)
    {
        $authCode = $request->code;
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

        if (array_key_exists('error', $accessToken)) {
            throw new \Exception(join(', ', $accessToken));
        }

        if (!file_exists($credentialsPath)) {
            touch($credentialsPath);
        }
        
        if(!empty($accessToken['refresh_token'])){
            file_put_contents($credentialsPath, json_encode($accessToken));
            \Log::channel('locations')->info("Credentials of google saved");
        }
    }

    public function connect()
    {
        $client = $this->getClient();
        // $client->setState($user->id);
        $urlAuth = $client->createAuthUrl();
        return $urlAuth;
    }
    
    public function checkStatusConnect($user)
    {
        // $checkStatus = Entity::checkStatusConnect($user, PublisherKey::GOOGLE_MY_BUSINESS);
        // if ($checkStatus == ListingStatus::DISCONNECT) {
        //     throw ValidationException::withMessages([trans('Publisher not connect yet')]);
        // }
        
        // return [$user->id, $user->entity()->first()];
    }
    
    public function getGooglePublisherInstance($user)
    {
        // [$userId, $entity] = $this->checkStatusConnect($user);
        
        // $information = $entity->information;
        
        // $direction = $information['directory_name'];
        
        // $client = (new GMBService)->getClient();
        
        // $googleClient    = new GoogleClient($client, $userId);
        // $googlePublisher = new GooglePublisher($googleClient);
        
        // return [$direction, $googlePublisher, $googleClient, $entity];
    }
}
