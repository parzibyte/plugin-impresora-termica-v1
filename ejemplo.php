<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("ejemplo_imprimir_ticket") ?></h1>
        <p><?php echo traducir("parrafo_1_ejemplo") ?></p>

        <h1 class="is-size-1 has-text-centered"><?php echo traducir("probar_ejemplo") ?></h1>
        <p><?php echo traducir("aviso_requisito_plugin") ?></p>
        <div class="py-2">
            <div class="select">
                <select name="listaDeImpresoras" id="listaDeImpresoras"></select>
            </div>
            <button id="btnImprimir" class="button is-success"><?php echo traducir("imprimir") ?></button>
            <div class="notification is-info mt-2">
                <?php echo traducir("aviso_mas_ejemplos") ?>
            </div>
        </div>

    </div>
</div>

<?php
include_once "pie.php";
?>