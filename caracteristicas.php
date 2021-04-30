<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("caracteristicas") ?></h1>
        <div class="content">
            <ol>
                <li><?php echo traducir("caracteristica_1") ?></li>
                <li><?php echo traducir("caracteristica_2") ?></li>
                <li><?php echo traducir("caracteristica_3") ?></li>
                <li><?php echo traducir("caracteristica_4") ?></li>
                <li><?php echo traducir("caracteristica_5") ?></li>
                <li><?php echo traducir("caracteristica_6") ?></li>
                <li><?php echo traducir("caracteristica_7") ?></li>
                <li><?php echo traducir("caracteristica_8") ?></li>
                <li><?php echo traducir("caracteristica_9") ?></li>
                <li><?php echo traducir("caracteristica_10") ?></li>
            </ol>
        </div>
        <div class="">
            <h1 class="is-size-1 has-text-centered"><?php echo traducir("caracteristicas_no_soportadas") ?></h1>
            <div class="content">
                <ol>
                    <li><?php echo traducir("no_soportado_1") ?></li>
                    <li><?php echo traducir("no_soportado_2") ?></li>
                </ol>
            </div>
            <div class="notification is-info has-text-centered">
                <?php echo traducir("mensaje_caracteristicas_no_soportadas") ?>
                <br>
                <a class="button is-danger" href="https://parzibyte.me/blog/2021/02/09/presentando-plugin-impresoras-termicas-version-2/"><?php echo traducir("ver_version_2") ?></a>
                <a class="button is-warning" href="https://parzibyte.me/blog/2021/02/09/presentando-plugin-impresoras-termicas-version-2/"><?php echo traducir("ver_plugin_pdf") ?></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once "pie.php";
?>