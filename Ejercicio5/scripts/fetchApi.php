<?php
    $publicKey = "f798c3f58e918341c01fe38cd917c25e";
    $privateKey = "e84c0e6788c17cc17bbd8a0db5b85fea83b2dbba";
    $ts = date();

    $hash = $publicKey . $privateKey . $ts;

    $hash = md5($hash);

    $url = "http://gateway.marvel.com/v1/public/comics?ts=$ts&apikey=$publicKey&hash=$hash";

    function getData() {
        
    };

    function postData() {

    };
?>