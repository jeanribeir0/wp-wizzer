<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  
</head>
<body>
<header>
    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/wizzer.svg" alt="Wizzer">
    <button>Entrar</button>
</header>
<?php wp_head(); ?>