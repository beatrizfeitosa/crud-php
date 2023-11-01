<html>
<head>
  <title>Altera Registros</title>
</head>

<?
 $res1 = mysql_connect("localhost", "root");
 $sql = "select * from cliente where seq_cliente = $edSequencial";
 $res2 = mysql_db_query("pessoal", "$sql", $res1);
 $valor = mysql_fetch_array($res2);
 if ($valor["seq_cliente"] > 0) {
?>

<form name="showCliente" action="altera.php" method="post">
<h1>Alteração de Clientes</h1>
<input type="hidden" name="hdSequencial" value="<?=$valor["seq_cliente"];?>">

<p><b>Nome: </b><input type="text" name="edNome" size=40 maxlength=80 value="<?=$valor["nom_cliente"];?>">
</p>
<p><b>Sexo: </b>
<input type="radio" name="rgSexo" value="M"
<? if ($valor["sex_cliente"] == "M") { echo " CHECKED"; } ?>
>Masculino</input>
<input type="radio" name="rgSexo" value="F"
<? if ($valor["sex_cliente"] == "F") { echo " CHECKED"; } ?>
>Feminino</input>
</p>
<p><b>Endereço: </b>
<textarea name="edEndereco" rows="3" cols="40">
<?=$valor["end_cliente"];?>
</textarea>
</p>
<center><input type="submit" value=" Altera "></center>
</form>
<?
  } else { 
    echo "Cliente não encontrado"; 
}
mysql_close($res1);
?>

</html>