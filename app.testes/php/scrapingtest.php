<?php

$url = 'https://www.digikey.pt/products/pt?keywords=resistor';

## Instância 
$handle = curl_init();

## atribuir url
curl_setopt($handle, CURLOPT_URL, $url);

## retornar dados em vez de os mostrar
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);

$output = curl_exec($handle);

curl_close($handle);
unset($handle);
unset($url);

$dom = new DOMDocument;
$dom->preserveWhiteSpace = false;
## carregar string html
## warnings suprimidos
@$dom->loadHTML($output);

$obj = $dom->getElementsByTagName('table');
echo "\n\n---------------------METODOS---------------------\n\n";
var_dump(get_class_methods($obj));
echo "\n\n----------------------VARS-----------------------\n\n";
var_dump(get_object_vars($obj));
echo "\n\n----------------------ITEMS-----------------------\n\n";
var_dump($obj->item(0)));

?>