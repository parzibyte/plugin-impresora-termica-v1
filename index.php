<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column has-text-centered">
        <h1 class="is-size-1"><?php echo traducir("titulo") ?></h1>
        <div class="notification is-info">
            <p><?php echo traducir("mensaje_inicio") ?></p>
        </div>
        <div class="columns is-vcentered">
            <div class="column is-two-thirds">
                <img src="Tickets impresos con JavaScript desde la nube usando plugin.jpg" alt="Ticket">
            </div>
            <div class="column">
                <a class="button is-success is-large" href="comenzar_a_usar.php"><?php echo traducir("comenzar_a_usar") ?></a>
                <br>
                <a href="https://parzibyte.me/blog">By Parzibyte</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once "pie.php";
?>