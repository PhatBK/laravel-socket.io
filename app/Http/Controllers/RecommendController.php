<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;
// use GuzzleHttp\Psr7\Request;

class RecommendController extends Controller
{
    public $data_set = "";
	// $client = new GuzzleClient();
    public function get_api(){
  
    	$client = new GuzzleClient(['base_uri' => 'http://127.0.0.1:5000/']);
    	$res = $client->request('GET', 'api_get/');
    	
    	$code = $res->getStatusCode(); // 200
		$reason = $res->getReasonPhrase(); // OK
		
    	dd($res);
    }
    public function post_api(){
    	
    	$client = new GuzzleClient(['base_uri' => 'http://127.0.0.1:5000/']);
    	$res = $client->request('POST','api_post/');
    	dd($res);

    }
    public function get_api_data_user(){
    	
    	$client = new GuzzleClient(['base_uri' => 'http://127.0.0.1:5000/']);
    	$res = $client->request('GET','api_get_data/user');

    	$body = $res->getBody();
		
		$stringBody = (string) $body;
		$tenBytes = $body->read(10);
		$remainingBytes = $body->getContents();

    	dd($stringBody,$tenBytes,$remainingBytes);
    	
    }
    public function get_api_data_monan(){
    	$client = new GuzzleClient(['base_uri' => 'http://127.0.0.1:5000/']);
    	$res = $client->request('GET','api_get_data/monan');
    	$body = $res->getBody();
    	dd((string) $body);
    }
    public function get_data(){

    }
    public function clear_data(){

    }
    public function norm_data(){

    }
}
