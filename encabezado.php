<?php include_once "funciones.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo traducir("titulo_pagina") ?>- By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <script src="https://parzibyte.github.io/ejemplos-javascript-plugin-v3/ConectorJavaScript.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4859317680104877" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://parzibyte.me/blog">
                <h2 class="is-size-5"><?php echo traducir("titulo_corto_pagina") ?></h2>
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php"><?php echo traducir("inicio") ?></a>
                <a class="navbar-item" href="comenzar_a_usar.php"><?php echo traducir("comenzar_a_usar") ?></a>
                <a class="navbar-item" href="caracteristicas.php"><?php echo traducir("caracteristicas") ?></a>
                <a class="navbar-item" target="_blank" href="https://gist.github.com/parzibyte/2f36655ef9d6ea8e6de73c6e09bbc735#file-documentacion-txt"><?php echo traducir("documentacion") ?></a>
                <a class="navbar-item" href="ejemplo.php"><?php echo traducir("ejemplo") ?></a>
                <a class="navbar-item" href="faq.php"><?php echo traducir("faq") ?></a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="https://parzibyte.me/blog/2022/09/30/plugin-impresoras-termicas-version-3/" class="button is-danger">
                            <strong><?php echo traducir("android_version") ?></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="https://parzibyte.me/blog/2022/10/02/contratar-licencia-para-plugin-impresora-termica-v3/" class="button is-primary">
                            <strong><?php echo traducir("comprar") ?></strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">