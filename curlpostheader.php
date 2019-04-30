<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://10.33.34.121/create_header.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "nama=agnes filia&id_user=fifidion");

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'token: ql3MtWE2DBwZWWuaz0xw3fG82GiDErjusDa1Ye4mrlwZ25tx5K',
            ));
// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

$server_output = curl_exec($ch);

curl_close ($ch);