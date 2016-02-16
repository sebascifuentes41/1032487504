<?php
$num1=10;
$num2=35;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="50%" border="5" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="2" bgcolor="#CCFFCC" scope="row">CALCULADORA BASICA </th>
  </tr>
  <tr>
    <th width="50%" bgcolor="#999999" scope="row">NUMERO 1 </th>
    <td width="50%" bgcolor="#6699FF"><?php echo $num1; ?></td>
  </tr>
  <tr>
    <th bgcolor="#999999">NUMERO 2 </th>
    <td bgcolor="#6699FF"><?php echo $num2; ?></td>
  </tr>
  <tr>
    <th bgcolor="#999999" scope="row">SUMA</th>
    <td bgcolor="#6699FF"><?php echo $num1 + $num2; ?></td>
  </tr>
</table>
</body>
</html>
