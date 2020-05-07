<?php

// $pictures = [
//    '{name: "samsung-galaxy-s20-ultra-128gb.jpg", type: "image/jpeg", size: "42 kB"}'
// ];

// if(count($pictures)){
//     foreach ($pictures as $e) {
//         $data = $e['base64'];
       
//     }
// }

$data = 'data:image/png;base64,AAAFBfj42Pj4';

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
list(, $duoi)      = explode('/', $type);


$data = base64_decode($data);

$url = 'files/'.time().'tn.'.$duoi;

$r = file_put_contents($url, $data);

if (($r === false) || ($r == -1)) {
    echo "Couldn't save weather to weather-zip.txt";
}else{
    echo $url ;
}

?>
