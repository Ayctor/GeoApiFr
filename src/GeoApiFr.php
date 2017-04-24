<?php

namespace GeoApiFr;

use \GuzzleHttp\Client;

class GeoApiFr
{
    private $api_endpoint = 'https://geo.api.gouv.fr/';

    private $client = null;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => $this->api_endpoint]);
    }

    public function get($method, $args = [])
    {
        try {
            $res = $this->client->request('GET', $method, ['query' => $args]);
        } catch (RequestException $e) {
            $res = $e->getResponse();
        }

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody());
        }

        return $res;
    }
}
