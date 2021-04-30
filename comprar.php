<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("comprar") ?></h1>
        <p><?php echo traducir("parrafo_comprar_1") ?>
        <h3 class="is-size-3"><?php echo number_format(obtenerPrecioPlugin(), 2) ?> USD<h3>
                </p>
                <p><?php echo traducir("aviso_antes_comprar") ?> </p>
                <div class="content">
                    <ol>
                        <li><?php echo traducir("antes_comprar_1") ?></li>
                        <li><?php echo traducir("antes_comprar_2") ?></li>
                        <li><?php echo traducir("antes_comprar_3") ?> <h3 class="is-size-3"><?php echo number_format(obtenerPrecioDominioAdicional(), 2) ?> USD</h3>
                        </li>
                        <li><?php echo traducir("antes_comprar_4") ?> <h3 class="is-size-3"><?php echo number_format(obtenerPrecioDominioIlimitado(), 2) ?> USD</h3>
                        </li>
                        <li><?php echo traducir("antes_comprar_5") ?></li>
                        <li><?php echo traducir("antes_comprar_6") ?></li>
                        <li><?php echo traducir("antes_comprar_7") ?></li>
                    </ol>
                </div>
                <h1 class="is-size-1"><?php echo traducir("proceso_compra") ?></h1>
                <div class="content">
                    <ol>
                        <li><?php echo traducir("no_devoluciones") ?></li>
                        <li><?php echo traducir("proceder_al_pago") ?></li>
                        <li><?php echo traducir("enviarme_mensaje") ?></li>
                        <li><?php echo traducir("pago_recibido") ?></li>
                    </ol>
                </div>
    </div>
</div>
<?php
include_once "pie.php";
?>