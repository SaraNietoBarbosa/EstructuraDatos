<?php

$maquillaje = ["gloss", "sombras", "blush", "labial"];
echo "Lista inicial de maquillaje\n";
print_r($maquillaje);


$maquillaje[] = "rimel";
echo "\nAgregar rimel al array\n";
print_r($maquillaje);


$maquillaje[2] = "lapiz";
echo "\nreemplazar el elemento 2 por lapiz\n";
print_r($maquillaje);


$eliminar = "gloss";
$llave = array_search($eliminar, $maquillaje);
if ($llave !== false) {
    unset($maquillaje[$llave]);
    echo "Eliminar el elemento gloss del array\n";
    print_r($maquillaje);
}


$subset = array_slice($maquillaje, 1, 3);
echo "\nSe extraen 3 elementos desde la posicion 1\n";
print_r($subset);


$maquillaje2 = ["polvo", "base", "corrector"];
$combinado = array_merge($maquillaje, $maquillaje2);
echo "\nSe combinan dos arrays de maquillaje\n";
print_r($combinado);


sort($combinado);
echo "\nOrdenar la lista alfabeticamente\n";
print_r($combinado);


$filtrado = array_filter($combinado, function($item) {
    return strlen($item) > 5;
});
echo "\nFiltrar elementos del array con mas de 5 caracteres\n";
print_r($filtrado);
