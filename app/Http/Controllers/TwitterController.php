<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Noweh\TwitterApi\Client;

class TwitterController extends Controller
{
    public function connectToTwitter(Request $request) {
        // echo "hello";die;
        $callback = "";

        $settings = [
            'account_id' => '123123',
            'consumer_key' => env('TWITTER_API_KEY'),
            'consumer_secret' => env('TWITTER_API_KEY_SECRET'),
            'bearer_token' => env('TWITTER_BEARER_TOKEN'),
            'access_token' => env('TWITTER_ACCESS_TOKEN'),
            'access_token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET')
        ];

        $client = new Client($settings);
        $id = "1567390828359983105";
        $result = $client->tweet()->performRequest('GET', array( 'id' => $id));
        $return = $client->tweet()->performRequest('POST', ['text' => 'naunsa....']);
        // $return = $client->retweet()->performRequest('POST', ['tweet_id' => $id]);
        // $this->retweet();
        var_dump($result);die;

        // $_twitter_connect = new TwitterOAuth(env('TWITTER_API_KEY'), env('TWITTER_API_KEY_SECRET'));
        // $content = $_twitter_connect->oauth() ->get("account/verify_credentials");
    }

    public function retweet() {

        // echo "hello";die;
        $callback = "";

        $settings = [
            'account_id' => '123123',
            'consumer_key' => env('TWITTER_API_KEY'),
            'consumer_secret' => env('TWITTER_API_KEY_SECRET'),
            'bearer_token' => env('TWITTER_BEARER_TOKEN'),
            'access_token' => env('TWITTER_ACCESS_TOKEN'),
            'access_token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET')
        ];

        $id = "1567390828359983105";
        $client = new Client($settings);

        $return = $client->retweet()->performRequest('POST', ['tweet_id' => $id]);
    } 

    public function callback() {
        echo "hillo";die;
    }
}
