<?php
include_once "encabezado.php";
?>
<div class="columns">
    <div class="column">
        <h1 class="is-size-1 has-text-centered"><?php echo traducir("ejemplo_imprimir_ticket") ?></h1>
        <p><?php echo traducir("parrafo_1_ejemplo") ?></p>
        <script src="https://gist.github.com/parzibyte/ce3a4de85401c69c0d7c8e8bae9a21cf.js"></script>

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
    <script>
        const $listaDeImpresoras = document.querySelector("#listaDeImpresoras"),
            $btnImprimir = document.querySelector("#btnImprimir");


        const obtenerListaDeImpresoras = () => {
            console.log("Cargando lista...");
            Impresora.getImpresoras()
                .then(listaDeImpresoras => {
                    console.log("Lista cargada");
                    listaDeImpresoras.forEach(nombreImpresora => {
                        const option = document.createElement('option');
                        option.value = option.text = nombreImpresora;
                        $listaDeImpresoras.appendChild(option);
                    })
                });
        }

        $btnImprimir.addEventListener("click", () => {
            let impresora = new Impresora();
            impresora.setFontSize(1, 1);
            impresora.write("Fuente 1,1\n");
            impresora.setFontSize(1, 2);
            impresora.write("Fuente 1,2\n");
            impresora.setFontSize(2, 2);
            impresora.write("Fuente 2,2\n");
            impresora.setFontSize(2, 1);
            impresora.write("Fuente 2,1\n");
            impresora.setFontSize(1, 1);
            impresora.setEmphasize(1);
            impresora.write("Emphasize 1\n");
            impresora.setEmphasize(0);
            impresora.write("Emphasize 0\n");
            impresora.setAlign("center");
            impresora.write("Centrado\n");
            impresora.setAlign("left");
            impresora.write("Izquierda\n");
            impresora.setAlign("right");
            impresora.write("Derecha\n");
            impresora.setFont("A");
            impresora.write("Fuente A\n");
            impresora.setFont("B");
            impresora.write("Fuente B\n");
            impresora.feed(2);
            impresora.write("Separado por 2\n");
            impresora.setAlign("center");
            impresora.write("QR:\n");
            impresora.qr("https://parzibyte.me/blog");
            impresora.write("Barcode:\n");
            impresora.barcode("123456", 80, "barcode128");
            impresora.cut();
            impresora.cutPartial(); // Pongo este y también cut porque en ocasiones no funciona con cut, solo con cutPartial
            impresora.cash();
            impresora.imprimirEnImpresora($listaDeImpresoras.value);
        });

        // En el init, obtenemos la lista
        obtenerListaDeImpresoras();
    </script>
</div>
<?php
include_once "pie.php";
?>