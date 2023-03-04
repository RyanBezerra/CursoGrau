<?php
$frase1 = "A imaginação é mais importante que o conhecimento.";
$frase2 = "A liberação da energia atômica mudou tudo, menos nossa maneira de pensar.";
$frase3 = "A mente que se abre a uma nova idéia jamais voltará ao seu tamanho original.";
$frase4 = "O mundo não está ameaçado pelas pessoas más, e sim por aquelas que permitem a maldade.";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Albert Einstein</title>
<style type="text/css">
body,td,th {
	color: #4584B8;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #CCC;
}
</style>
</head>

<body>
<h2>Albert Einstein</h2>
<p>Albert Einstein foi um físico teórico alemão radicado nos Estados Unidos. Devido à formulação da teoria da relatividade, <br />
Einstein tornou-se mundialmente famoso. Nos seus últimos anos, sua fama excedeu a de qualquer outro cientista na cultura <br />
popular: &quot;Einstein&quot; tornou-se um sinonimo de gênio.</p>
<p>Confira algumas das famosas frases de Einstein:</p>
<p>1 - <?php echo substr ($frase1, 0, 22); ?> <br />
2 - <?php echo str_replace(" " , "..." , $frase2); ?> <br>
3 - <?php echo ucwords($frase3); ?> <br>
4 - <?php echo substr($frase4, 2 , 5); ?> </p>
<p><?php echo date ("d**m**Y");?></p>
</body>
</html>
