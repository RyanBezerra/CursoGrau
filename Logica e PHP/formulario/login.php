<?php
if (isset($_COOKIE["cookieusuario"])){
	$usuario = $_COOKIE["cookieusuario"];
}else{
	$usuario = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* É recomendável zerar a margem e o preenchimento do elemento body para acomodar os diferentes padrões de navegador */
	padding: 0;
	text-align: center; /* Isso centraliza o contêiner em navegadores IE 5*. O texto é então definido como o padrão de alinhamento à esquerda no seletor #container */
	color: #000000;
}

/* Dicas para layouts elásticos
1. Como o tamanho total dos layouts elásticos baseia-se no tamanho das fontes padrão do usuário, eles são mais imprevisíveis. Usados corretamente, eles também são mais acessíveis para aqueles que precisam de fontes de tamanho maior, pois o comprimento da linha permanece proporcional.
2. O tamanho dos divs deste layout baseia-se no tamanho de fonte 100% no elemento body. Se você reduzir o tamanho total do texto usando o tamanho de fonte 80% no elemento body ou em #container, lembre-se de que o tamanho de todo o layout será reduzido proporcionalmente. Convém aumentar as larguras dos vários divs para compensar isso.
3. Se o tamanho da fonte for alterado em proporções diferentes em cada div, e não no design global (p.ex.: o tamanho de fonte 70% é atribuído a #sidebar1 e o tamanho de fonte 85% é atribuído a #mainContent), o tamanho total de cada div será alterado proporcionalmente. Convém fazer ajustes com base no tamanho de fonte final.
*/
.oneColElsCtrHdr #container {
	width: 46em;  /* Esta largura criará um contêiner que se ajustará em uma janela de navegador de 800px se o texto estiver nos tamanhos de fonte padrão do navegador */
	background: #FFFFFF;
	margin: 0 auto; /* As margens automáticas (juntamente com a largura) centralizam a página */
	border: 1px solid #000000;
	text-align: left; /* Isso substitui text-align: center do elemento body. */
}
.oneColElsCtrHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* Este preenchimento corresponde ao alinhamento à esquerda dos elementos nos divs exibidos abaixo dele. Se uma imagem for usada em #header em vez de texto, convém remover o preenchimento. */
} 
.oneColElsCtrHdr #header h1 {
	margin: 0; /* Se a margem do último elemento for zerada no div #header, a margem não será reduzida - um espaço inexplicável entre divs. Se houver uma borda ao redor do div, isso não será necessário, pois também evitará a redução da margem */
	padding: 10px 0; /* Usar preenchimento em vez de margem permitirá manter o elemento distante das bordas do div */
}
.oneColElsCtrHdr #mainContent {
	padding: 0 20px; /* Lembre-se de que o preenchimento é o espaço dentro da caixa do div e a margem é o espaço fora da caixa do div */
	background: #FFFFFF;
}
.oneColElsCtrHdr #footer { 
	padding: 0 10px; /* Este preenchimento corresponde ao alinhamento à esquerda dos elementos nos divs exibidos acima dele. */
	background:#DDDDDD;
} 
.oneColElsCtrHdr #footer p {
	margin: 0; /* Se as margens do primeiro elemento forem zeradas no rodapé, não haverá possibilidade de redução de margem - um espaço entre divs */
	padding: 10px 0; /* O preenchimento deste elemento criará um espaço exatamente como a margem criaria, mas sem o problema de redução da margem */
}
-->
</style></head>

<body class="oneColElsCtrHdr">

<div id="container">
  <div id="header">
    <h1>Sistema web</h1>
  <!-- end #header --></div>
  <div id="mainContent">
    <h2> Login do usuário</h2>
	<form method="post" action="resultado.php">
    <table width="400" border="0" cellpadding="2" cellspacing="0" id="tblLogin">
      <tr>
        <td align="right">Usuário:</td>
        <td><label>
          <input type="text" name="txtUsuario" id="txtUsuario" value="<?php echo $usuario; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right">Senha:</td>
        <td><input type="text" name="txtSenha" id="txtSenha" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="checkbox" name="chkLembrar" id="chkLembrar" value="S" />
        Lembrar meu usuário</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="btnEntrar" id="btnEntrar" value="Entrar" />
        </label></td>
      </tr>
    </table>
	</form>
    <p>
      <!-- end #mainContent -->
  </p>
  </div>
  <div id="footer">
    <p>Exemplo do curso de PHP</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
