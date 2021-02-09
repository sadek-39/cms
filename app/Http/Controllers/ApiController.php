<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //post curl function
    public function Curlapirequest($data,$url)
    {
        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
              ));
              
              $response = curl_exec($curl);
              return $response;
              curl_close($curl);

    }
    //get curl function
    public function getCurlApiRequest($url){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        //CURLOPT_POSTFIELDS => array('title' => 'Advance Project Integration','meta_keywords' => 'meta key','meta_description' => 'meta description','header_section' => 'header','footer_section' => 'footer','copyright' => 'copyright','social_links' => 'www.google.com','address' => 'Banani','phone' => '01521484839','email' => 'sadekstn@gmail.com','fremail' => 'sadek.sultan@api.net.bd'),
        CURLOPT_HTTPHEADER => array(
                'Cookie: XSRF-TOKEN=eyJpdiI6IndsZklmb1VSQzFVTEFNaEZmYmt3M1E9PSIsInZhbHVlIjoiY0NIdkxHZEI5aWloZzRYR1BnNVRJdHhhWSsycGlnanFvUVZSY09paGdHQ2lTMXRyZDdLY2l5TTRSTHd0d0RWczZCUE1GMWh2MGdPZGdBOTRzcmYxWE5UcDBaZ1JmeURYSlNkdnZsall1NDZQNStXV0lBbHJRWU1VVXNQWVl6d3kiLCJtYWMiOiJmMjIzNThmY2MyZmQ0NGVmNjMwZmUzYjFkNzEyMDc1MDdiODJkMTFmODZhMDBiNDQ1N2IxNDBlMWU5MDU0OGU0In0%3D; laravel_session=eyJpdiI6IlNNS1RlYnlpc0FQNTlXcm12dWZFWnc9PSIsInZhbHVlIjoiVnJBN2xMYWlZQWJKaVF3akpoYXJ2aks0NERXeExOSWF6N0hjT3dZME9IQTFDbnVPcTVKKzBHT0dsVkpDcjdIZHFFc1FyTm5ZaWVVL1NaWjc1ako4MmZDeHJRSjdFZkNiREQ0NWZHL1RLM0F6cTByVURnbzRpS0l1UVhkeTdhdTQiLCJtYWMiOiI4MmQyNzlhMGUxMmQyZDliZGJlNzgwYTJhMDdhYmM4N2Q0MGZiM2VlYmJjMzlmMTE2MmVmOGUxMzMxNWYwYzdhIn0%3D'
            ),
            ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }
    //update curl function
    public function updatecurlrequest($data,$url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        //CURLOPT_HTTPHEADER => array(
           // 'Content-Type: application/x-www-form-urlencoded'
       // ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }
    public function getsinglecurlrequest($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        //CURLOPT_POSTFIELDS => 'slider_page=viewpage',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }


}
