<?php

class confereCep {
    public static function zipCodeValidate(string $cep) : bool {
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'viacep.com.br/ws/'.$cep.'/json/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
    
        curl_exec($curl);
        $infoCurl = curl_getinfo($curl);
        curl_close($curl);
    
        if($infoCurl['http_code'] == 200){
            return true;
        } else {
            return false;
        }
    }
}