<?php 
$info_url = "https://api.flickr.com/services/rest/?method=flickr.tags.getListUser";
$api_key = "a91ef4d6da4482a723c047a7508b5416";
$user_id= "139243584@N05";

$info_url .= '&api_key=' .$api_key;
$info_url .= '&user_id=' .$user_id;
$info_url .= '&format=json';
$info_url .= '&nojsoncallback=1'; 
$api_call_url = urlencode( $info_url);
$raw_data = file_get_contents($info_url);
$tags = json_decode($raw_data,true);


echo '<h1>Austin Pictures</h1>
<link href="style.css" rel="stylesheet" type="text/css" />
<form action="Flickrtest.php" method="post">';
foreach ($tags['who']['tags']['tag'] as $key => $value) {
    echo "<br />";
    echo '<button name="tag" value='.$value['_content'].'>'.$value['_content'].'</button>';
    
}

echo '</form>';