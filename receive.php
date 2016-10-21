<?php

    $data = json_decode(file_get_contents('php://input'), true); //recebe json postado pelo oajax


    $data = (array) $data; //  converte o json em um array para poder usar o comando ['field'];

    echo $data['nome'];