<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomece Brasil</title>
    <?php wp_head();?>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <div class="nav-header-container">
        <header class="container nav-header p-3">
            <image class="logo" alt="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logoHeader.svg"/>
            <button class="menu"><img src="<?php echo get_bloginfo('template_url') ?>/images/menu-icon.svg" alt="Menu" width="100%"></button>
            <div class="nav-bar">
                <div class="links">
                    <ul>
                        <li><a href="<?php echo get_home_url()?>">Home</li></a></li>
                        <li><a href="<?php echo get_home_url() . "/quem-somos"?>">Quem somos</a></li>
                        <li><a href="<?php echo get_home_url() . "/servicos"?>">Serviços</a></li>
                        <li><a href="<?php echo get_home_url() . "/category/geral"?>">Blog</a></li>
                        <li><a href="<?php echo get_home_url() . "/fac"?>">FAC</a></li>
                        <li><a href="<?php echo get_home_url() . "/contato"?>">Contato</a></li>
                    </ul>
                </div>
                <div class="fale-conosco">
                    <button class="header-button">Fale com nossos consultores</button>
                </div>
            </div>
        </header>
    </div>