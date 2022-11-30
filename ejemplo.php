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
    <script>const obtenerListaDeImpresoras = async () => {
    return await ConectorPluginV3.obtenerImpresoras();
}
const URLPlugin = "http://localhost:8000"
const $listaDeImpresoras = document.querySelector("#listaDeImpresoras"),
    $btnImprimir = document.querySelector("#btnImprimir");

const init = async () => {
    const impresoras = await ConectorPluginV3.obtenerImpresoras(URLPlugin);
    for (const impresora of impresoras) {
        $listaDeImpresoras.appendChild(Object.assign(document.createElement("option"), {
            value: impresora,
            text: impresora,
        }));
    }
    $btnImprimir.addEventListener("click", () => {
        const nombreImpresora = $listaDeImpresoras.value;
        if (!nombreImpresora) {
            return alert("Por favor seleccione una impresora. Si no hay ninguna, asegúrese de haberla compartido como se indica en: https://parzibyte.me/blog/2017/12/11/instalar-impresora-termica-generica/")
        }
        imprimirHolaMundo(nombreImpresora);
    });
}


const imprimirHolaMundo = async (nombreImpresora) => {
    const conector = new ConectorPluginV3(URLPlugin);
    conector.Iniciar();
    conector.EscribirTexto("Hola mundo\nParzibyte.me");
    conector.Feed(1);
    const respuesta = await conector
        .imprimirEn(nombreImpresora);
    if (respuesta === true) {
        alert("Impreso correctamente");
    } else {
        alert("Error: " + respuesta);
    }
}
init();</script>
</div>

<?php
include_once "pie.php";
?>