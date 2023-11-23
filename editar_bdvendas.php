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

    <h1> Editar dados bdvendas </h1>

     <?php


        if ($_POST){
            $codigo=$_POST['codigo'];
            $nome=$_POST['nome'];
            $morada=$_POST['morada'];
            $telefone=$_POST['telefone'];
        
        if ($nome and $morada and $telefone){
           
            $sql = "UPDATE clientes SET nome='$nome', morada='$morada', telefone='$telefone' WHERE codigo=$codigo";
            $resultado = $ligacao_bd->query($sql);

            if($resultado==0){
                echo "Edição não efetuada. Volte a tentar mais tarde";
            }else{
                echo "Edição efetuada com sucesso!";
            }
            header("refresh:3; url=listagem_bdvendas.php");
        
        } else {
            echo "Não preencheu todos os dados corretamente!";
            header("refresh:3; url=listagem_bdvendas.php");
        }
        } else {
            $codigo=$_GET['codigo'];

            $sql = "SELECT * FROM clientes WHERE codigo = $codigo ORDER BY codigo";
            $resultado = $ligacao_bd->query($sql);
            $num_reg = $resultado->num_rows;

            if($num_reg==0){

                echo "Sem registos na base de dados.";
                
            } else {

                while ($registo = $resultado->fetch_assoc()){
                    $nome = $registo['nome'];
                    $morada = $registo['morada'];
                    $telefone = $registo['telefone'];
                }

        ?>

                <form action="editar_bdvendas.php" method="POST">
                    Nome: <input name="nome" type="text" value="<?php echo $nome; ?>">
                    <br> Morada: <input name="morada" type="text" value="<?php echo $morada; ?>">
                    <br> Telefone: <input name="telefone" type="text" value="<?php echo $telefone; ?>">
                    <br> <input name="codigo" type="hidden" value="<?php echo $codigo; ?>">
                    <input name="limpar" type="reset" value="Limpar">
                    <input name="gravar" type="submit" value="Editar">
                </form>

         <?php }}  ?>    
         
         <input type="button" value="Voltar" onclick="history.go(-1)">

</body>

</html>