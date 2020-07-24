<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SERVER_API extends CI_Model
{

    var $base_api = "";
    public function __construct()
    {
        parent::__construct();
        $this->base_api = UrlApi();
    }

    //Get APi
    public function _getAPI($controller = "", $token = "")
    {
        $xToken[0] = "x-auth-token: " . $token;
        $xToken[1] = "Content-Type: application/json";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_api . $controller,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $xToken,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    public function _deletetAPI($controller = "", $token = "")
    {
        $xToken[0] = "x-auth-token: " . $token;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_api . $controller,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => $xToken,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
    public function _putAPI($controller = "", $data = "", $token = "")
    {
        $xToken[0] = "x-auth-token: " . $token;
        $xToken[1] = "Content-Type: application/json";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_api . $controller,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $xToken,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    //Post Api
    public function _postAPI($controller = "", $data, $token = "")
    {
        $xToken[0] = "x-auth-token: " . $token;
        $xToken[1] = "Content-Type: application/json";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_api . $controller,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $xToken,
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
