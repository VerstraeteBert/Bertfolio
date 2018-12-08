<?php
    /* Main Header template */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Bertfolio</title>
    <!-- TODO Dynamic title -->
    <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
<header>
    <!-- TODO Dynamic nav -->
    <nav class="header-nav">
        <ul>
            <li class="nav-item">
                <a>about</a>
            </li>
            <li class="nav-item">
                <a>work</a>
            </li>
            <li class="nav-item">
                <a>blog</a>
            </li>
            <li class="nav-item">
                <a>contact</a>
            </li>
        </ul>
    </nav>
</header>