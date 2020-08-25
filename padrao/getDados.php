<?php
    header("Access-Control-Allow-Origin: http://www.venancioshopping.com.br");
    //Conectando ao banco de dados
    $con = new mysqli("", "", "", ""); // insert your database data here is secure because it runs in the server
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    $value = $_GET['IDForm'];
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT * FROM wp_posts");
    $qryLista1 = mysqli_query($con, "SELECT * FROM wp_terms INNER JOIN wp_term_taxonomy ON wp_terms.term_id = wp_term_taxonomy.term_id");  
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    while($resultado1 = mysqli_fetch_assoc($qryLista1)){
        $vetor1[] = array_map('utf8_encode', $resultado1); 
    } 
     

    $all = array_merge($vetor,$vetor1);
    //Passando vetor em forma de json
    echo json_encode($all, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
    
?>
