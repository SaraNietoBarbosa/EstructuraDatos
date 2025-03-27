<?php

$maquillaje = ["gloss", "sombras", "blush", "labial"];

echo "Lista inicial de maquillaje:\n";
print_r($maquillaje);


$maquillaje[] = "rimel";
echo "Se agrega rimel a la lista\n";
print_r($maquillaje);


$eliminar = "gloss";
$llave = array_search($eliminar, $maquillaje);

if ($llave !== false) {
    unset($maquillaje[$llave]);
    echo "Se elimina $eliminar de la lista\n";
} 
print_r($maquillaje);


$maquillaje[2] = "lapiz";
echo "Se reemplaza el elemento en la posición 2 con lapiz\n";
print_r($maquillaje);


$subset = array_slice($maquillaje, 1, 3); // Desde la posición 1, toma 3 elementos
echo "Elementos seleccionados:\n";
print_r($subset);

?>