<?php 


namespace App\WebService;

class ViaCep {
    public static function consultarCep($cep){
       
      $curl = curl_init();

      //configurações do curl
      curl_setopt_array($curl, [
        CURLOPT_URL => "https://viacep.com.br/ws/{$cep}/json/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET'
      ]);

      //response
      $response = curl_exec($curl);

      //fechando a conexão
      curl_close($curl);

      //converter o json para array
      $array = json_decode($response, true);
      //retornar o conteundo em array
      return isset($array['cep']) ? $array : null;
    }
}