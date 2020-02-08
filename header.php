<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Acme|Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <nav class="container-fluid">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </header>
    <div class="main-container">