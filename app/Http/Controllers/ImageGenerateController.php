<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return $text;
        $url = "https://api.openai.com/v1/images/generations";
        $token = config('app.openai_api_key') ;
        $json = ['prompt'=> $text, 'n'=>5, 'size'=> '512x512'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token
        ])->post($url, $json)->json();
        if(isset($response['data'])) {
            $response = $response['data'];
        }
        if (isset($response['error'])) {
            $message = $response['error']['message'];
            return redirect()->back()->with('error', $message);
        }

        return view('gen1',compact('response'));
    }
}
