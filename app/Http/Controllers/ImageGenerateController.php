<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use Illuminate\Support\Facades\Http;

class ImageGenerateController extends Controller
{
    public function index() {
        return view('home');
    }
    public function generate() {
        return view('generate');
    }
    public function ImageGeneration(TextRequest $request)
    {
        $text =  $request->text;
        $url = "https://api.openai.com/v1/images/generations";
        $token = config('app.openai_api_key') ;
        $json = ['prompt'=> $text, 'n'=>5, 'size'=> '512x512'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ])->post($url, $json)->json();
        if(isset($response['data'])) {
            $response = $response['data'];
        }
        if (isset($response['error'])) {
            $message = $response['error']['message'];
            if (preg_match("/Rate limit exceeded for images/", $message)) {
                $message = "Rate limit exceeded for images per minute. Try again after few minutes";
            }

            return response()->json(['status' => 'error', 'message' => $message]);
        }

        return response()->json(['status' => 'success', 'data' => $response]);
    }
}
