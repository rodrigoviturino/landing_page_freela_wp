<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <?php wp_head(); ?>

</head>
<body>
    
<header class="header">
    <div class="container-fluid">
        <div class="header__wrapper">

            <a href="#" class="header__wrapper__logo">
                <img src="<?php echo get_template_directory_uri();?>'/assets/images/logo.png' " alt="Logo">
            </a>

            <nav>
                <ul>

                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">About Us</a>
                    </li>

                    <li>
                        <a href="#">Portfólio</a>
                    </li>

                    <li>
                        <a href="#">Services</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <a href="#" class="header__wrapper__btn">Buy Tickets</a>
                </ul>
                
            </nav>


        </div>
    </div>
</header>