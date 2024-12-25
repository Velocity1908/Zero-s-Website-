<?php
$apiKey = 'AIzaSyBtKetlDhAbloTtZhQOFb67w9aciyu3fvs';
$channelId = ' UC_itPq6ucqGxinpX1UIaGMA';
$url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&order=date&part=snippet&type=video";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (!empty($data['items'])) {
    $latestVideo = $data['items'][0];
    $videoId = $latestVideo['id']['videoId'];
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
} else {
    echo 'No videos found.';
}
?>
