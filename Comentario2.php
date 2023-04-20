<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém o valor do campo de texto do comentário
  $comentario = $_POST['comentario'];

  // Armazena o comentário em um arquivo de log ou em um banco de dados, por exemplo
  // ...

  // Exibe uma mensagem de sucesso para o usuário
  echo 'Comentário enviado com sucesso!';
}
?>

<!-- Formulário HTML para coletar o comentário -->
<form method="post">
  <label for="comentario">Digite seu comentário:</label>
  <textarea name="comentario" id="comentario"></textarea>
  <button type="submit">Enviar</button>
</form>
