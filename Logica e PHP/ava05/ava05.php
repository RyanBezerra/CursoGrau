<?php 
$raça1 = fopen("cao1.txt","r");
$raça2 = fopen("cao2.txt","r");
$raça3 = fopen("cao3.txt","r");
$raça4 = fopen("cao4.txt","r");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Números Pares</title>
<style type="text/css">
body,td,th {
	color: #a43c99;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #f2e8ff;
	text-align: center;
}
td {
	text-align: center;
}
</style>
</head>

<body>
<h2>Amigo Cão</h2>
<p>Um grande número de Pitbulls, Pastores, Dobermans entre diversas outras raças consideradas &quot;ferozes&quot; tem um temperamento dócil e equilibrado que, se tiverem um dia a dia<br />
baseado em carinho e respeito ao animal, serão excelentes companheiros que jamais medirão esforços para estar ao seu lado.</p>
<p>Nos anos 70 culparam os Dobermans,<br />
  Nos anos 80 culparam os Pastores Alemães,<br />
  Nos anos 90 culparam os Rottweiler,<br />
  Agora culpam os Pit Bull.<br />
Quando eles culparão os humanos?</p>
<h4>Conheça algumas raças que sofrem com preconceito</h4>
<p>
<?php 
while(!feof($raça1))
{
echo fgets($raça1) . "<br>"; 
}
fclose($raça1)

?>
</p>
<p>
<?php 
while(!feof($raça2))
{
echo fgets($raça2) . "<br>"; 
}
fclose($raça2)

?>
</p>
<p>
<?php 
while(!feof($raça3))
{
echo fgets($raça3) . "<br>"; 
}
fclose($raça3)

?>
</p>
<p>
<?php 
while(!feof($raça4))
{
echo fgets($raça4) . "<br>"; 
}
fclose($raça4)

?>
</p>
</body>
</html>
