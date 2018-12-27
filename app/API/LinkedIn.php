<?php

namespace App\API;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;

class LinkedIn extends AbstractProvider
{
    protected $httpClient;
    protected $guzzle = [];
    protected $clientId;
    protected $clientSecret;
    protected $redirectUrl;
    protected $request;

    public function __construct()
    {
        // $config = $this->app['config']['services.linkedin'];
        $config = config('services.linkedin');

        
        $this->request = request();
        $this->clientId = $config['client_id'];
        $this->redirectUrl = $this->formatRedirectUrl($config);
        $this->clientSecret = $config['client_secret'];
    }
    
    /**
     * Format the callback URL, resolving a relative URI if needed.
     *
     * @param  array  $config
     * @return string
     */
    protected function formatRedirectUrl(array $config)
    {
        $redirect = value($config['redirect']);

        return Str::startsWith($redirect, '/')
                    ? $this->app['url']->to($redirect)
                    : $redirect;
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new Client($this->guzzle);
        }

        return $this->httpClient;
    }

    public function getArticlesByAuthor($token)
    {
        // $fields = implode(',', $this->fields);

        $url = 'https://api.linkedin.com/v2/originalArticles?q=authors';

        $response = $this->getHttpClient()->get($url, [
            'headers' => [
                'x-li-format' => 'json',
                'X-Restli-Protocol-Version' => '2.0.0',
                'Authorization' => 'Bearer '.$token,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
    
}