<?php
// recebendo os dados do formulário
$usuario = $_POST["txtUsuario"];
$senha = $_POST["txtSenha"];

// recebendo o valor do checkbox
// contém um teste para evitar aviso de objeto vazio
if (!empty($_POST["chkLembrar"])){
	$lembrar = $_POST["chkLembrar"];
}else{
	$lembrar = "";
}

// testando se o checkbox foi preenchido
if ($lembrar == "S"){
	setcookie ("cookieusuario", $usuario, time()+3600);
	echo "O Cookie foi criado!";
}else{
	setcookie ("cookieusuario", "", time()-3600);
	echo "O Cookie foi destruído!";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultado</title>
<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* É recomendável zerar a margem e o preenchimento do elemento body para acomodar os diferentes padrões de navegador */
	padding: 0;
	text-align: center; /* Isso centraliza o contêiner em navegadores IE 5*. O texto é então definido como o padrão de alinhamento à esquerda no seletor #container */
	color: #000000;
	background-color: #CCC;
}
.twoColHybRtHdr #container { 
	width: 80%;  /* Isso cria um contêiner com 80% da largura do navegador */
	background: #FFFFFF;
	margin: 0 auto; /* As margens automáticas (juntamente com a largura) centralizam a página */
	border: 1px solid #000000;
	text-align: left; /* Isso substitui text-align: center do elemento body. */
} 
.twoColHybRtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* Este preenchimento corresponde ao alinhamento à esquerda dos elementos nos divs exibidos abaixo dele. Se uma imagem for usada em #header em vez de texto, convém remover o preenchimento. */
} 
.twoColHybRtHdr #header h1 {
	margin: 0; /* Se a margem do último elemento for zerada no div #header, a margem não será reduzida - um espaço inexplicável entre divs. Se houver uma borda ao redor do div, isso não será necessário, pois também evitará a redução da margem */
	padding: 10px 0; /* Usar preenchimento em vez de margem permitirá manter o elemento distante das bordas do div */
}

/* Dicas para a barra lateral 1:
1. Como estamos trabalhando com unidades relativas, é melhor não usar o preenchimento na barra lateral. Ele será adicionado à largura total para navegadores compatíveis com padrões, criando uma largura real desconhecida. 
2. Como unidades de espaços "m" são usadas para o valor da barra lateral, lembre-se de que sua largura variará de acordo com os diversos tamanhos de texto padrão.
3. Para criar o espaço entre a lateral do div e os elementos nele contidos, insira margens esquerda e direita nesses elementos, assim como na regra ".twoColHybRtHdr #sidebar1 p".
*/
.twoColHybRtHdr #sidebar1 {
	float: right; 
	width: 12em; /* Como esse elemento é flutuante, uma largura deve ser fornecida */
	background: #EBEBEB; /* A cor do plano de fundo será exibida para o comprimento do conteúdo na coluna, mas não mais do que isso */
	padding: 15px 0; /* O preenchimento da parte superior e inferior cria um espaço visual dentro deste div  */
}
.twoColHybRtHdr #sidebar1 h3, .twoColHybRtHdr #sidebar1 p {
	margin-left: 10px; /* As margens direita e esquerda devem ser fornecidas para cada elemento que será colocado nas colunas laterais */
	margin-right: 10px;
}

/* Dicas para mainContent:
1. O espaço entre o mainContent e sidebar1 é criado com a margem direita do div mainContent. Não importa quanto conteúdo exista no div da barra lateral 1, o espaço da coluna permanecerá igual. Você pode remover essa margem direita se desejar que o texto do div #mainContent preencha o espaço #sidebar1 quando o conteúdo em #sidebar1 terminar.
2. Lembre-se de que é possível que a flutuação se solte (a área de mainContent não flutuante abaixo da barra lateral) se um elemento maior do que ela possa conter for colocado dentro do div mainContent. Com um layout híbrido (largura total baseada em porcentagem com barra lateral baseada em espaço "m"), talvez não seja possível calcular a largura exata disponível. Se o tamanho do texto do usuário for maior do que a média, haverá um div de barra lateral maior e, portanto, menos espaço no div mainContent. Você deve estar ciente dessa limitação - especialmente se o cliente estiver adicionando conteúdo com Contribute.
3. No Comentário Condicional do Internet Explorer abaixo, a propriedade zoom é usada para fornecer "hasLayout" de mainContent." Isso pode evitar diversos erros específicos do IE.
*/
.twoColHybRtHdr #mainContent {
  margin: 0 13em 0 10px; /* O valor da margem esquerda equivale ao valor do cabeçalho e do rodapé, que cria um alinhamento abaixo e à esquerda do documento. */
} 
.twoColHybRtHdr #footer { 
	padding: 0 10px; /* Este preenchimento corresponde ao alinhamento à esquerda dos elementos nos divs exibidos acima dele. */
	background:#DDDDDD;
} 
.twoColHybRtHdr #footer p {
	margin: 0; /* Se as margens do primeiro elemento forem zeradas no rodapé, não haverá possibilidade de redução de margem - um espaço entre divs */
	padding: 10px 0; /* O preenchimento deste elemento criará um espaço exatamente como a margem criaria, mas sem o problema de redução da margem */
}

/* Diversas classes para reutilização */
.fltrt { /* Esta classe é usada para flutuar um elemento à direita na página. O elemento flutuante deve preceder o elemento e estar próximo dele na página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* Esta classe é usada para flutuar um elemento à esquerda em sua página */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* Esta classe deve ser colocada em um elemento div ou break e deve ser o último elemento antes do fechamento de um contêiner que deve conter uma flutuação completamente */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* Coloca correções de CSS para todas as versões do IE neste comentário condicional */
.twoColHybRtHdr #sidebar1 { padding-top: 30px; }
.twoColHybRtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* A propriedade zoom proprietária acima dá ao IE o hasLayout necessário para evitar diversos erros */
</style>
<![endif]--></head>

<body class="twoColHybRtHdr">

<div id="container">
  <div id="header">
    <h1>Sistema web</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <h3>Curso de PHP</h3>
    <p>Nesse exemplo estamos testando o recurso de Cookies e também envio e tratamento de formulários.</p>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h1> Bem Vindo: <?php echo $usuario; ?></h1>
    <p>A senha digitada foi <?php echo $senha; ?></p>
    <p>Você foi logado com sucesso no sistema!</p>
    <hr />
    <p>&nbsp;</p>
    <h3>Assuntos pendentes</h3>
<p>- Efetuar a baixa de pagamentos</p>
    <p>- Ligar para fornecedores</p>
    <p>- Enviar email com o resultado mensal</p>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
	<br class="clearfloat" />
	<div id="footer">
    <p>Exemplo do curso de PHP</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
