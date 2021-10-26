<?php
    $arquivo = "contador.txt";
    // Arquivo que armmazena a contagem

    $handle = fopen($arquivo, 'r+');
    // Definição par ler e escrever no arquivo

    $data = fread($handle, 512);
    // Obtem a contagem atual

    $contador = $data + 1;
    // Adiciona mais 1

    print "Você é o visitante numero ".$contador;
    // Exibe na tela a contagem

    fseek($handle, 0);
    // O ponteiro volta para o começo

    fwrite($handle, $contador);
    // Salva o valor da Variavel contador no arquivo

    fclose($handle);
    // Fecha o arquivo
?>