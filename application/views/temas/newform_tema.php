<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
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
        <section class="contenido">
            <h1>Registro Nuevo Tema</h1>
            <?=validation_errors('<div class="errors">','</div>'); ?>
            <p><?=$error?></p>
            <?php echo form_open_multipart('temas/save_tema');?>
                <div>
                    <?= form_label("Nombre Tema:", "nombre")?>
                    <?= form_input(array('name' => 'nombre', 'id'=>'nombre', 'size'=>'20', 'value'=>set_value('nombre'), 'placeholder'=>'Ingrese el Nombre del Tema', 'required'=>'required'))?>
                </div>
                <div>
                <?= form_label("Artista:", "artista")?>
                <?= form_input(array('name' => 'artista', 'id'=>'artista', 'size'=>'20', 'value'=>set_value('artista'), 'placeholder'=>'Ingrese el Nombre del Artista', 'required'=>'required'))?>
                </div>
                <div>
                <?= form_label("Genero:", "genero")?>
                <?= form_input(array('name' => 'genero', 'id'=>'genero', 'size'=>'20', 'value'=>set_value('genero'), 'placeholder'=>'Ingrese el Genero del Tema', 'required'=>'required'))?>
                </div>
                <div>
                    <?=form_label('Seleccione un Tema', 'music')?>
                    <input type="file" id="musica" name="musica" size="30" />
                </div>


                <br><?= form_submit(array('name'=>'guardar', 'value'=>'guardar', 'class'=>'botoncss3'))?>

            <?form_close();?>
        </section>
	</div>
</body>
</html>