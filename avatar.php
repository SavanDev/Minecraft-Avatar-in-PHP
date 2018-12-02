<?php
/*
    Dylan Navas (SavanDev) - 2018
    Minecraft Avatar in PHP
    Using Crafatar API
*/

$user = isset($_GET['u']) ? $_GET['u'] : "Steve"; // Username/UUID
$size = isset($_GET['s']) ? $_GET['s'] : 64; // Size of the image

// Get UUID
$content = file_get_contents("https://api.mojang.com/users/profiles/minecraft/" . $user);
$json = json_decode($content);
$uuid = $json->id;

$url = "https://crafatar.com/avatars/" . $uuid . "?s=" . $size; // URL API Crafatar

// Header
header("Content-Type: image/png");

// Get imagen
$image = file_get_contents($url);

echo $image; // Return image

?>