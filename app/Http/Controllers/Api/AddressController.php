<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AddressController extends Controller
{
     public function address()
    {
      if ($_POST["mode"] == 'search') {
      $client = new Client();

      $url = 'http://zipcloud.ibsnet.co.jp/api/search';
      $option = [
      'headers' => [
      'Accept' => '*/*',
      'Content-Type' => 'application/x-www-form-urlencoded'
       ],
       'form_params' => [
       'zipcode' => $_POST['zipcode']
        ]
       ];

      $response = $client->request('POST', $url, $option);

      $result = json_decode($response->getBody()->getContents(), true);
        }
    }
}
