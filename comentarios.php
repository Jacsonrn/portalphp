
<?php
include 'Comentario2.php';

// lista de palavras ofensivas
$palavras_ofensivas = array('Porra', 'Caralho', 'Fudeu', 'Filhodaputa', 'vai se fuder', 'Vou te matar','Desgraçado');


// verifica se o comentário contém palavras ofensivas
$comentario_ofensivo = false;
foreach ($palavras_ofensivas as $palavra) {
    if (stripos($comentario, $palavra) !== false) {
        $comentario_ofensivo = true;
        break;
    }
}

// imprime o resultado
if ($comentario_ofensivo) {
    echo 'Comentário contém palavras ofensivas.';
} else {
    echo 'Comentário é apropriado.';
}

?>
