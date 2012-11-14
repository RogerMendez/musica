<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/base.css">
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico">
	<link rel="apple-touch-icon" href="<?=base_url()?>images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>images<?=base_url()?>/apple-touch-icon-114x114.png">
    <script src="<?=base_url()?>js/jquery-1.8.1.min.js">
        
    </script>
    <script>
        $(document).ready(function(){
            //controlando la altura
            $(".contenedorprincipal").css("height",$(this).height());
            
        });
    </script>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="header">
            <div class="content">
                <div class="three columns">
                    <img src="<?=base_url()?>images/logosistemas.png" />
                </div>
                <div class="eight columns">
                    <div class="buscadors">
                        .
                    </div>
                </div>
                <div class="four columns">
                    <ul class="loginMenu">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Registro</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li><?=anchor('principal', 'INICIO');?></li>
                <li><?=anchor('temas', 'TEMAS');?></li>
                <li><?=anchor('temas/new_tema', 'SUBIR TEMA');?></li>
            </ul>
        </nav>
        <div class="contenedorprincipal"> 
                <div class="topcontainer"> 
                 
                </div>
                <div class="buscador">
                    <form action="" method="post">
                        <ul>
                            <li>
                                <h1>
                                    Buscar M&uacutesica
                                </h1>
                            </li>
                            <li>
                                <input type="text" value="" />
                            </li>
                            <li>
                                <input type="submit" value="Bucar" />
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="reproductor">
                    <ul>
                        <li class="media">
                            <audio>
                                
                            </audio>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img1.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img3.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img2.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img1.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img3.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img2.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img1.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img3.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img2.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img1.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img3.jpg" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="dimg">
                                    <img src="<?=base_url()?>images/img2.jpg" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
	</div><!-- container -->
<!-- End Document
================================================== -->
</body>
</html>