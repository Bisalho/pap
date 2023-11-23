<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Inserir dados bdvendas </title>

    <link rel="stylesheet" href="estilos.css">

    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
    
    <?php require "config.php"; ?>

    <h1> Eliminar dados bdvendas </h1>

     <?php

            $codigo=$_GET['codigo'];

            $sql = "DELETE FROM clientes WHERE codigo = $codigo";
            $resultado = $ligacao_bd->query($sql);

            if($resultado==0){
                echo "Registo não eliminado. Volte a tentar mais tarde";
            }else{
                echo "Registo eliminado com sucesso!";
            }
            header("refresh:3; url=listagem_bdvendas.php");
    ?>
         
         <input type="button" value="Voltar" onclick="history.go(-1)">

</body>

</html>