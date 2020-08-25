<?php
    //Conectando ao banco de dados
    $con = new mysqli("mysql12-farm70.uni5.net", "venancioshoppi", "2his4SwokU6i", "venancioshoppi");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT * FROM wp_posts");
    $qryLista1 = mysqli_query($con, "SELECT * FROM wp_terms");
    $qryLista2 = mysqli_query($con, "SELECT * FROM wp_term_relationships");   
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    while($resultado1 = mysqli_fetch_assoc($qryLista1)){
        $vetor1[] = array_map('utf8_encode', $resultado1); 
    }
    while($resultado2 = mysqli_fetch_assoc($qryLista2)){
        $vetor2[] = array_map('utf8_encode', $resultado2); 
    } 
    $all = array_merge($vetor,$vetor1,$vetor2);
    //Passando vetor em forma de json
    echo json_encode($all);
    
?>