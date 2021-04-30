<?php
include_once "vendor/autoload.php";

use Symfony\Component\Translation\Loader\JsonFileLoader;
use Symfony\Component\Translation\Translator;

function obtenerPrecioDominioIlimitado()
{
    return 25;
}
function obtenerPrecioDominioAdicional()
{
    return 2;
}

function obtenerPrecioPlugin()
{
    return 25;
}

function cadenaEmpiezaCon($cadena, $busqueda)
{
    return mb_substr($cadena, 0, mb_strlen($busqueda)) === $busqueda;
}

function traducir($cadena)
{
    $idiomaDetectado = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    /*
    Si es algo como es_MX, es_US, etcétera, lo mandamos directamente a "es"
    Si no, lo dejamos intacto y caerá por defecto en inglés
     */
    $idioma = cadenaEmpiezaCon($idiomaDetectado, "es") ? "es" : $idiomaDetectado;
    $traductor = new Translator($idioma);
    $traductor->addLoader("json", new JsonFileLoader());
    $traductor->addResource("json", "idioma_es.json", "es");
    $traductor->addResource("json", "idioma_en.json", "en");
    $traductor->setFallbackLocales(["en"]); // Si no se encuentra el idioma, utilizamos en por defecto
    return $traductor->trans($cadena);
}
