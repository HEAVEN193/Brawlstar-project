<?php

namespace Matteomcr\BrawlstarProject\Models;

class Brawler {

    public static function fetchAll(){
        $curl = curl_init("https://api.brawlapi.com/v1/brawlers/");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return json_decode($response, false);
    }

    public static function fetchById(int $id){
        $curl = curl_init("https://api.brawlapi.com/v1/brawlers/" . $id); // 16000038
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return json_decode($response, false);
    }
}