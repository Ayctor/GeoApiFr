<?php

namespace GeoApiFr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Geo Api class
 */
class GeoApiFr
{
    /**
     * Static instance to make requests 
     * @var null
     */
    private static $_instance = null;

    /**
     * Base api endpoint
     * @var string
     */
    private static $api_endpoint = 'https://geo.api.gouv.fr/';

    /**
     * GuzzleHttp client
     * @var null
     */
    private $client = null;

    /**
     * Init client
     */
    public function __construct()
    {
        $this->client = new Client(['base_uri' => self::$api_endpoint]);
    }

    /**
     * Getter of a static instance to avoid to create one every time
     * @return GeoApiFr Instance of GeoApiFr
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new GeoApiFr();
        }
        return self::$_instance;
    }

    /**
     * Make an HTTP GET request - for retrieving data
     * @param  string $method URL of the API request method
     * @param  array  $args   Assoc array of arguments (usually your data)
     * @return array         Assoc array of API response, decoded from JSON
     */
    public function get($method, $args = [])
    {
        $res = $this->client->request('GET', $method, ['query' => $args]);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody());
        }

        return $res;
    }
}
