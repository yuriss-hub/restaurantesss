<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include "../links/links-head.php"; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante SSS</title>
  </head>
  <body>
    <?php include "../layout/header.php"; ?>
    <main>
      <?php include "../layout/sidebar.php"; ?>
      <!-- Inicio da seção de sobremesas -->
      <div id="bebidas-alcoolicas" class="conteudo-principal-produto">
        <div class="card-produto">
          <div class="imagem-produto">
            <img src="../assets/img/categorias/bebidas-alcoolicas/caipirinha.JPG" alt=""/>
          </div>
          <div class="descricao-produto">
            <p>Caipirinha</p>
          </div>
          <div class="preco-produto">
            <span class="preco-produto">R$ 5,00</span>
          </div>
          <div class="botao-produto">
            <button onclick="abrirModal()">Comprar</button>
          </div>
        </div>
      </div>
      <!-- Fim da seção de sobremesas -->
      <?php include "../funcional/modal_comprar.php"; ?>
    </main>
    <?php include "../links/links-script.php"; ?>
  </body>
</html>
