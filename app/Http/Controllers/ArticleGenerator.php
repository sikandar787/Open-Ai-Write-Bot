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

    public function ImageGeneration()
    {
        $text = "Logo for e commerece";
        $url = "https://api.openai.com/v1/images/generations";
        $token = config('app.openai_api_key') ;
        $json = ['prompt'=> $text, 'n'=>5, 'size'=> '512x512'];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token
        ])->post($url, $json)->json();
            return $response;
        // $ch = curl_init($url);
        
        // /* Array Parameter Data */
        // $data = ['prompt'=> $text, 'n'=>5, 'size'=> '512x512'];
        // curl_setopt($ch, CURLOPT_POST, 1);
        // // /* pass encoded JSON string to the POST fields */
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            
        // /* set the content type json */
        // // $headers = [];
        // // $headers[] = 'Content-Type:application/json';
        // // $headers[] = "Authorization: Bearer ".$token;
        // // return $headers;
        
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer '.$token));
            
        // /* set return type json */
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        // /* execute request */
        // $result = curl_exec($ch);
             
        // /* close cURL resource */
        // curl_close($ch);
        
        // return $result;
    }

}
