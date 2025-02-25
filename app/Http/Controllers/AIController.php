<?php

namespace App\Http\Controllers;

use App\Services\AIService;
use Illuminate\Http\Request;

class AIController extends Controller
{
    protected $aiService;

    public function __construct(AIService $aiService)
    {
        $this->aiService = $aiService;
    }

    public function askAI(Request $request)
    {
        $prompt = $request->input('prompt', 'Bonjour, peux-tu me dire ce qu’est Laravel ?');
        $response = $this->aiService->generateText($prompt);
        return response()->json($response);
    }
}
