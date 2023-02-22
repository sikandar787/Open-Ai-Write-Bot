<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TextRequest;
use OpenAI;
use Illuminate\Support\Facades\Http;
class ArticleGenerator extends Controller
{
    public function index(Request $input)
    {
        if ($input->title == null) {
            return;
        }

        $title = $input->title;

        $client = OpenAI::client(config('app.openai_api_key'));

        $result = $client->completions()->create(
            [
            "model" => "text-davinci-003",
            "temperature" => 0.9,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'prompt' => sprintf('Write article about: %s', $title),
            ]
        );
        $content = trim($result['choices'][0]['text']);
        

        return view('write', compact('title', 'content'));
    }

    public function ImageGeneration(TextRequest $request)
    {   
        $text =  $request->text;
        $url = "https://api.openai.com/v1/images/generations";
        $token = config('app.openai_api_key') ;
        $json = ['prompt'=> $text, 'n'=>5, 'size'=> '512x512'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token
        ])->post($url, $json)->json();
     $response = $response['data'];
    //  return $response;
            return view('generate',compact('response'));
    }

}
