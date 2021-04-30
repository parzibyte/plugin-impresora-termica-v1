<?php include_once "funciones.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla inicial de Bulma CSS - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
</head>

<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://parzibyte.me/blog">
                <h2 class="is-size-5">Plugin v1</h2>
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
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
                <a class="navbar-item" href="documentacion.php"><?php echo traducir("documentacion") ?></a>
                <a class="navbar-item" href="index.php"><?php echo traducir("ejemplos") ?></a>
                <a class="navbar-item" href="index.php"><?php echo traducir("errores") ?></a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="https://parzibyte.me/l/fW8zGd"
                            class="button is-primary">
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