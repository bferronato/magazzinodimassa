<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Calculadora</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="./css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="./css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/calculadora.js"></script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-35184277-2']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
            	<div class="logotipo">
            		<img src="./images/logo.png" alt="Magazzino di Massas" />
            	</div>
                <div class="art-header-clip">
                <div class="art-header-center">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                </div>
                <div class="art-logo">
                	<h1 class="art-logo-name"><a href="./index.php">Calculadora de pre&ccedil;os de produtos</a></h1>
                	<h6>
                		<?php 
                		$host = getenv('HOST');
                		echo $host;
                		?>
                	</h6>
                    <h2 class="art-logo-text">por c&oacute;digo de barras</h2>
                </div>
            </div>
            <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">
		<li>
			<a href="./calculadora.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Calculadora</span></a>
		</li>
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
            <div class="art-post">
                <div class="art-post-body">
                    <div class="art-post-inner art-article">
                        <h2 class="art-postheader">
                            Calculadora
                        </h2>
                    <div class="cleared"></div>
                <div class="art-postcontent">
    			<table border="0" width="100%">
    			  <tr>
    			    <th width="20%">Lista de produtos somados</th>
    			    <td>
    			    	&nbsp;
    				</td>
    			  </tr>
    			  <tr>
    			    <td>
    			    	<select id="lista_produtos" multiple="multiple" size="10" style="width: 200px; float: left;"></select>
    				</td>
    			    <td>
    				    <table width="100%">
    					  <tr>
    					    <th>C&oacute;digo do produto</th>
    					    <td><input type="text" id="produto" /></td>
    					  </tr>
    					  <tr>
    					    <th>Valor do Produto</th>
    					    <td><input type="text" id="valor_produto" /></td>
    					  </tr>
    					  <tr>
    					    <th>&nbsp;</th>
    					    <td>&nbsp;</td>
    					  </tr>
    					  <tr>
    					    <th>Soma Total</th>
    					    <td><input id="total" style="border: 1px solid red; color: red; font-size: 30px;" /></td>
    					  </tr>
    					</table>
    				</td>
    			  </tr>
    			</table>
            </div>
            <div class="cleared"></div>
        </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
    			<div class="art-footer-text">
    				<p><!--
    					Entre em contato: bferronato@gmail.com
    					-->
    				</p>
    			</div>
                <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer">
    </p>
</div>

</body>
</html>
