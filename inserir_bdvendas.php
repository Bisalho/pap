<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Inserir dados bdvendas </title>
</head>

<body>
    
    <?php
        require "config.php";
        
        $nome=$_POST['nome'];
        $morada=$_POST['morada'];
        $telefone=$_POST['telefone'];
        
        if ($nome and $morada and $telefone){
           
            $sql = "INSERT INTO clientes (nome,morada,telefone) VALUES ('$nome', '$morada', '$telefone')";
            $resultado = $ligacao_bd->query($sql);

            if($resultado==0){
                echo "Registo não efetuado. Volte a tentar mais tarde";
            }else{
                echo "Registo efetuado com sucesso!";
            }
            header("refresh:3; url=inserir_bdvendas.html");
        
        } else {
            echo "Não preencheu todos os dados corretamente!";
            header("refresh:3; url=inserir_bdvendas.html");
        }
    ?>

</body>
</html>
