<?php
namespace App\Modules;

use Google_Client as BaseGoogleClient;

/**
 * Class GoogleClient
 * @package App\Components
 */
class GoogleClient
{
    /**
     * @var BaseGoogleClient
     */
    protected $client;

    /**
     * GoogleClient constructor.
     * @param BaseGoogleClient $client
     */
    public function __construct(BaseGoogleClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return BaseGoogleClient
     * @throws \Exception
     */
    public function getClient()
    {
        if (!file_exists(config('google-api.client_path'))) {
            throw new \Exception(
                'You have not create client for application.'
                .' Please create and save to your storage credentials.json"!'
            );
        }
        $this->client->setAuthConfig(config('google-api.client_path'));
        $this->client->setAccessType('offline');

        $path = storage_path("publishers/google/data.json");

        if (!file_exists($path)) {
            throw new \Exception("Please connect to get token!");
        }

        $accessToken = json_decode(file_get_contents($path), true);
        
        $this->client->setAccessToken($accessToken);

        if($this->client->isAccessTokenExpired()) {
            $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
            file_put_contents($path, json_encode($this->client->getAccessToken()));
        }
        
        return $this->client;
    }
}