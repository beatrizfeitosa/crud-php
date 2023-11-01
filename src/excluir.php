<?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
<html>
	<head><title>Exclusao de Produtos</title></head>
	<body>
	<h2 align="center">Exclusao de Produtos</h2><hr>
	<?php
	require_once("conecta.php");
	if(!isset($_POST["codigo"]))
	{
	?>
	<form method="POST" action="excluir.php">
	<p>Codigo do Produto:<input type="text" name="codigo" size="20">
	<input type="submit" value="DIGITE O CODIGO DO PRODUTO A SER EXCLUIDO" name="excluir"></p>
</form>



<?php
	}
	elseif(!isset($_POST["enviar"]))
	{
	$codigo=$_POST["codigo"];
	$sqli="SELECT * FROM produto WHERE codigo_produto=$codigo";
	$res=mysqli_query($conexao, $sqli);
	if(mysqli_num_rows($res)==0)
	echo "Produto não encontrado";
	else
	{ echo "Produto encontrado";
	$registro=mysqli_fetch_row($res);
	$nome=$registro[1];
	$descricao=$registro[2];
	$preco=$registro[3];
	$categoria=$registro[4];
?>
	<form method =  "POST" action="excluir.php">
	<p>Codigo:<b><?php echo $codigo; ?> </b> <br> <br>
	Nome: <input type="text" name="nome" size="40" value="
	<?php echo $nome;?>"><br>
	Descricao:<br> <textarea rows="2" name="descricao"
	cols="30"><?php echo $descricao;?> </textarea><br>
	Preco: <input type="text" name="preco" size="10" value="
<?php echo $preco;?>"><br>
	Categoria: <select size ="1" name="categoria">
 
<?php
	//gera a lista de categorias
	$res1=mysqli_query ($conexao, "SELECT * FROM categoria");
	while($registro=mysqli_fetch_row($res1))
	{
		$cod=$registro[0];
		$nomecat=$registro[1];
		echo "<option value=\"$cod\"";
		if($cod==$codigo)
		echo "selected";
		echo">$nomecat</option>\n";
	}
	?>
	 
	</select><br>
	<input type="hidden" name="codigo" value="
	<?php echo $codigo;?>">
	<input type ="hidden" name="enviar" value="S">
	<input type ="submit" value="CONFIRMAR EXCLUSÃO DE PRODUTO?" name="Alterar"></p>
</form>
 
<?php
mysqli_close($conexao);
}
}
else
                {
                    $codigo=$_POST["codigo"];
                    $nome=$_POST["nome"];
                    $descricao=$_POST["descricao"];
                    $preco=$_POST["preco"];
                    $cat=$_POST["categoria"];
                    $sql="DELETE FROM produto WHERE codigo_produto=$codigo";
                    $res2=mysqli_query($conexao, $sql);
                        if (mysqli_affected_rows($conexao)==1)
                        {
                                echo"<p align='center'>Produto excluído com sucesso!</p>";
                        }
                        else
                        {
                            $erro=mysqli_error($conexao);
                            echo "<p align='center'>Erro:$erro</p>";
                        }
                        mysqli_close($conexao);
                }
                ?>
                <p align="center"><a href="javascript:history.back();">Voltar</a></p>
                </body>
                </html>