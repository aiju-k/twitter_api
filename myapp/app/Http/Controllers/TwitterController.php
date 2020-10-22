<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        // 取得件数
        $count = 1;
        // タイムラインから10件ツイート取得
        $result = \Twitter::get('statuses/user_timeline', array('count' => $count));

        // キーワード検索
        // $result = \Twitter::get('search/tweets', array('q' => '#駆け出しエンジニアと繋がりたい', 'count' => 1));

        // $result = (array)$result;

        // viewを返す
        return view('result', [
            "result" => $result,
        ]);
    }
}
