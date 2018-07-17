<?php

namespace App\Utilidades;

use GuzzleHttp\Client;

class GuzzleHttpRequestUtilidades
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
			'base_uri' => 'https://api01.minx.gob.sv:8443/',
			'timeout'  => 2.0
		]);
    }

    protected function get($url)
    {
        $response = $this->client->request('GET', $url,
        ['cert' => 'C:\egob\OpenSSL\bin\test-CA\certificadoCliente.pem',   
        'ssl_key' => 'C:\egob\OpenSSL\bin\test-CA\llaveCliente.pem']);
        return json_decode($response->getBody()->getContents());
    }

    public function post()
    {
        $response = $this->client->request('POST', $url,
        ['cert' => 'C:\egob\OpenSSL\bin\test-CA\certificadoCliente.pem',   
        'ssl_key' => 'C:\egob\OpenSSL\bin\test-CA\llaveCliente.pem']);
        return json_decode($response->getBody()->getContents());        
    }

    public function put()
    {
        $response = $this->client->request('PUT', $url,
        ['cert' => 'C:\egob\OpenSSL\bin\test-CA\certificadoCliente.pem',   
        'ssl_key' => 'C:\egob\OpenSSL\bin\test-CA\llaveCliente.pem']);
        return json_decode($response->getBody()->getContents());
    }

    public function delete($url)
    {
        $response = $this->client->request('DELETE', $url,
        ['cert' => 'C:\egob\OpenSSL\bin\test-CA\certificadoCliente.pem',   
        'ssl_key' => 'C:\egob\OpenSSL\bin\test-CA\llaveCliente.pem']);
        return json_decode($response->getBody()->getContents());
    }
}