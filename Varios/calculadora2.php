<?php
if (isset ($_POST['suma'])){
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $res = $num1 + $num2;
}else{
   $num1=0;
   $num2=0;
   $res = 0;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo2 {color: #666666}
-->
</style>
</head>

<body>
<form action="" method="post" name="datos" id="datos">
  <table width="50%" border="3" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <th colspan="2" bgcolor="#CCFFCC" scope="row"><span class="Estilo2">CALCULADORA BASICA </span></th>
  </tr>
  <tr>
    <th width="50%" bordercolor="#CCCCCC" bgcolor="#6699FF" scope="row"><span class="Estilo2">NUMERO 1 </span></th>
    <td width="50%" bgcolor="#00CC99"><input name="num1" type="text" value="<?php echo $num1;  ?>" /></td>
  </tr>
  <tr>
    <th bgcolor="#6699FF" scope="row"><span class="Estilo2">NUMERO 2 </span></th>
    <td bgcolor="#00CC99"><input name="num2" type="text" value="<?php echo $num2;  ?>" /></td>
  </tr>
  <tr>
    <th colspan="2" bgcolor="#CCCCCC" scope="row"><span class="Estilo2">
      <input type="submit" name="suma" value="+" />
    </span></th>
  </tr>
  <tr>
    <th bordercolor="#6666FF" bgcolor="#6699CC" scope="row"><span class="Estilo2">RESULTADO</span></th>
    <td bgcolor="#99FFFF"><?php echo $res; ?></td>
  </tr>
</table>
</form>
</body>
</html>
