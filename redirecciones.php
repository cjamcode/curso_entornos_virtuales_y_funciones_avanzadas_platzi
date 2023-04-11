<?php

/**
 * header(): para definir los encabezados de una petición (información extra que envía el servidor)
 */

echo "redirigiendo";

die();

header("location: https://platzi.com");
die(); //siempre colocar exit o die luego de un header