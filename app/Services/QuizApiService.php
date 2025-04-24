<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class QuizApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY');
    }

    public function getQuizzes()
    {
        try {
            $response = $this->client->request('GET', 'https://500-quiz-api.p.rapidapi.com/api', [
                'headers' => [
                    'x-rapidapi-host' => '500-quiz-api.p.rapidapi.com',
                    'x-rapidapi-key' => $this->apiKey,
                ],
                'verify' => false
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return $data;

        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
