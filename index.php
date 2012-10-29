<?php
/**
 * @author Carlos Augusto
 * 
 * Pagina inicial
 * 
 * https://www.facebook.com/dialog/pagetab?app_id=453914997985530&display=popup&next=http://www.facebook.com/
 */
 require 'config.php'; 
	include 'head.php';	
?>
<div id="main" class="background-fundo-repeticao">	
	<img src="<?php echo BASE_URL . "images/fundo.jpg" ?>" alt="Novidades Loja" usemap="#Links" />
	<map name="Links">
	    <area shape="rect" coords="105,208,408,466" href="https://www.rochelliloja.com.br/detalheProduto.asp?id=5017000656153" target="_blank">
	    <area shape="rect" coords="432,167,687,473" href="https://www.rochelliloja.com.br/detalheProduto.asp?id=5017000662493" target="_blank">
	    <area shape="rect" coords="105,482,378,776" href="https://www.rochelliloja.com.br/detalheProduto.asp?id=5017000678217" target="_blank">
	    <area shape="rect" coords="430,471,680,800" href="https://www.rochelliloja.com.br/detalheProduto.asp?id=5017000667582" target="_blank">
    </map>
</div>	 
<?php include 'footer.php'; ?>