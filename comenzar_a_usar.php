<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("comenzar_a_usar") ?></h1>
        <div class="content">
            <ol>
                <li><?php echo traducir("paso_1_uso") ?></li>
                <li><?php echo traducir("paso_2_uso") ?></li>
                <li><?php echo traducir("paso_3_uso") ?></li>
                <li><?php echo traducir("paso_4_uso") ?></li>
                <li><?php echo traducir("paso_5_uso") ?></li>
                <li><?php echo traducir("paso_6_uso") ?></li>
                <li><?php echo traducir("paso_7_uso") ?></li>
            </ol>
        </div>
        <div class="has-text-centered">

            <h1 class="is-size-1 has-text-centered"><?php echo traducir("siguientes_pasos") ?></h1>
            <a class="button is-info" href="https://parzibyte.github.io/ejemplos-javascript-plugin-v3/hola.html"><?php echo traducir("codigo_fuente_ejemplos") ?></a>
            <a class="button is-warning" href="caracteristicas.php"><?php echo traducir("caracteristicas") ?></a>
            <a class="button is-danger" href="documentacion.php"><?php echo traducir("documentacion") ?></a>
        </div>
    </div>
</div>
<?php
include_once "pie.php";
?>