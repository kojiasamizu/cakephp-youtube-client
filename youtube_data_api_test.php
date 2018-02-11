<?php
//CloneしたAPIの読み込み
require_once('google-api-php-client/vendor/autoload.php');

//Googleクライアントを読み込み、API情報を設定する
$client = new Google_Client();
$client->setApplicationName("Youtube Data API v3 Test");
$client->setDeveloperKey("AIzaSyCi0_1SjY_0l_LsEq2EsU2SZRh3jA23POE");

//YouTubeの読み込み
$youtube = new Google_Service_YouTube($client);

//ワード検索してみる
$searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => '稲葉浩志',
        'maxResults' => 3,
));
print_r($searchResponse);
