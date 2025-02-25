<?php

namespace App\Services;

use GuzzleHttp\Client;

class AIService
{
    protected $client;
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('AI_API_URL'); // URL de l'API OpenAI
        $this->apiKey = env('AI_API_KEY'); // Votre clé API OpenAI
    }

    public function generateText($prompt)
    {
        try {
            $response = $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo', // Assurez-vous que votre compte OpenAI supporte ce modèle
                    'messages' => [['role' => 'user', 'content' => $prompt]],
                    'max_tokens' => 100,
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
