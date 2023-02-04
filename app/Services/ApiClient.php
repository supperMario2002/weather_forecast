<?php 
namespace App\Services;
use GuzzleHttp\Client;

class ApiClient {

    protected $client;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'https://api.example.com/v1/',
            // 'timeout'  => 2.0,
        ]);
    }

    public function get($endpoint, $params = []) {
        $response = $this->client->get($endpoint, [
            'query' => $params
        ]);

        return json_decode($response->getBody(), true);
    }

    public function post($endpoint, $params = []) {
        $response = $this->client->post($endpoint, [
            'form_params' => $params
        ]);

        return json_decode($response->getBody(), true);
    }

    public function put($endpoint, $params = []) {
        $response = $this->client->put($endpoint, [
            'form_params' => $params
        ]);

        return json_decode($response->getBody(), true);
    }

    public function delete($endpoint, $params = []) {
        $response = $this->client->delete($endpoint, [
            'form_params' => $params
        ]);

        return json_decode($response->getBody(), true);
    }
}
