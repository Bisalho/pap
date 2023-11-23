<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Listagem_bdvendas </title>

    <link rel="stylesheet" href="estilos.css"> 

    <script type="text/javascript" src="javascript.js"></script>

</head>

<body>
    
    <?php
        require "config.php";

        echo "<h3> Lista de Clientes </h3>";

        $sql = "SELECT * FROM clientes ORDER BY codigo";
        $resultado = $ligacao_bd->query($sql);
        $num_reg = $resultado->num_rows;

        if($num_reg==0){

            echo "Sem registos na base de dados.";
            
        } else {

            ?>

            <table align='center' width='600px' border='1'>

            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Morada</td>
                <td>Telefone</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php

            while ($registo = $resultado->fetch_assoc()){
                $codigo = $registo['codigo'];
                $nome = $registo['nome'];
                $morada = $registo['morada'];
                $telefone = $registo['telefone'];

                ?>

                <tr>
                    <td align="center"><?php echo $codigo; ?></td>
                    <td align="center"><?php echo $nome; ?></td>
                    <td><?php echo $morada; ?></td>
                    <td><?php echo $telefone; ?></td>
                    <td align="center"><a href="editar_bdvendas.php?codigo=<?php echo $codigo; ?>"><img src="editar.png" width="16" height="16" alt="Eliminar" /></a></td>
                    <td align="center"><img onclick="ConfirmaApagar('<?php echo $codigo; ?>','<?php echo $nome; ?>')" src="eliminar.png" width="16" height="16" alt="Eliminar" /></td>
                </tr>

                <?php
            }
            ?>
            </table>
            <?php
            
        }

    ?>

        <input type="button" value="Voltar" onclick="history.go(-1)">
  
</body>
</html>
