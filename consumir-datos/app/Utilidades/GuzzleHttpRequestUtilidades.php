<?php

namespace App\Utilidades;

use GuzzleHttp\Client;

class GuzzleHttpRequestUtilidades
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
			'base_uri' => 'http://localhost:81/proveer-datos/public/',
			'timeout'  => 2.0
		]);
    }

    protected function get($url)
    {
        $response = $this->client->request('GET', $url);
        return json_decode($response->getBody()->getContents());
    }

    public function post()
    {
        $response = $this->client->request('POST', $url);
        return json_decode($response->getBody()->getContents());        
    }

    public function put()
    {
        $response = $this->client->request('PUT', $url);
        return json_decode($response->getBody()->getContents());
    }

    public function delete($url)
    {
        $response = $this->client->request('DELETE', $url);
        return json_decode($response->getBody()->getContents());
    }
}