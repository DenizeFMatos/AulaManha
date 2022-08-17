<?php
    echo "Meu nome é Denize";
    echo "<h1>Função Nativa Echo </h1>";
    echo "<br>";
    echo "Bem - Vindo!";
/*
    echo "<h4> </h4>";
    $nota1 = 7.5;
    $nota2 = 8;
    $texto = "Minha média é:";
    $resultado = ($nota1 + $nota2)/2;

    $texto = $texto.$resultado;
    echo $texto;

    if($resultado >= 6){
        echo "Aprovado";
    }
    else if($resultado < 6 && $resultado >=2)
    {
        echo "Tem chance de recuperar";
    }
    else
    {
        echo "Reprovado";
    }

    //comentário
    /*bloco de comentário
    
    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    }while($contadora <10);
    echo "While:<br><br>";
    //echo "<br><br>Debug:".$resultado."<br><br><br>";
    while($contadora < 150)
    {
        if($contadora % 2 == 0){
            echo $contadora. "É número Par<br>";
        }else{
            echo "<p>".$contadora." É número Impar </p>";
        }
        $contadora++;
    }
    CONST teste = "oi";
    teste;
    for($i = 0; $i< 1550; $i++)
    {
        echo "<h1>". $i."</h1><br>";
    }*/

    echo "<table border='5'style='padding:5px'>";
    for($i=0; $i < 25 ; $i++){
        echo "<tr>";
        echo "<td>Nome ".$i."</td>";
        echo "<td>Idade ".$i."</td>";
        echo "</tr>";
    
    }
echo "</table>"

?>