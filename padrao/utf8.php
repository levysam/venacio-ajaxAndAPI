<?php

$teste = json_decode(file_get_contents('http://www.venancioshopping.com.br/novo/?json=wp-json/wp/v2/loja'));

    $obj = json_encode($teste, JSON_UNESCAPED_UNICODE);;
    echo $obj;