<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/base.css">
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?=base_url()?>stylesheets/layout.css">
	<link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico">
	<link rel="apple-touch-icon" href="<?=base_url()?>images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>images<?=base_url()?>/apple-touch-icon-114x114.png">
    
</head>
<body>
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
                <?foreach ($consulta as $fila):?>
                    <div class="musica">
                        <h3><?=$fila->nombre?></h3>
                        <p><?=$fila->artista?></p>
                        <audio controls>
                            <source src="mp3/<?=$fila->ubicacion?>">
                        </audio>
                    </div>
                    <br><br>
                <?endforeach?>
        </div>
	</div>
</body>
</html>