<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba API</title>
</head>
<body>
<?php 
// $channelId = 'UC-lHJZR3Gqxm24_Vd_AJ5Yw';
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  return json_decode($result, true);
}
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDJ3x-6vOD-WKd8RUEm4GpcKkCyUBN4mrk&channelId=UCFaFM_YTvfGP8B78ligvnrA&part=snippet&maxResults=5';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

$urlLatestVideo1 = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDJ3x-6vOD-WKd8RUEm4GpcKkCyUBN4mrk&channelId=UCOpNcN46UbXVtpKMrmU4Abg&part=snippet&maxResults=5';
$result1 = get_CURL($urlLatestVideo1);

?>

<?php
  for ($i=0;$i < count($result['items']); $i++) {
  

?>

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $result['items'][$i]['id']['videoId']; ?>?rel=0" allowfullscreen></iframe>
</div>


<?php
  }
?>


</body>
</html>