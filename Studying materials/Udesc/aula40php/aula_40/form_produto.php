<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 40</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .container {
        max-width: 960px;
      }
    </style>
  </head>
  <body class="text-light bg-dark">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57">
          <h2>NOVO PRODUTO</h2>
          <p class="lead">
            Cadastrar novo produto
          </p>
          <a href="index.php" class="btn btn-primary btn-lg">Listar Todos os Produtos</a>
        </div>
        <div class="py-5 bg-light text-dark">
          <div class="container">
            <div class="row g-5">
              <div class="col-md-12">
                <h4 class="mb-3">Dados do Produto</h4>
                
                <!-- Formulário -->
                <form class="needs-validation" novalidate enctype="multipart/form-data" method="post" action="salvarProduto.php" id="form" autocomplete="off">
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="nome" class="form-label">Nome do Produto</label>
                      <input type="text" class="form-control" id="nome" name="nome" required>
                      <div class="invalid-feedback">
                        O nome do produto é obrigatório.
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label for="marca" class="form-label">Marca</label>
                      <input type="text" class="form-control" id="marca" name="marca" required>
                      <div class="invalid-feedback">
                        A marca é obrigatória.
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="preco" class="form-label">Preço</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">R$</span>
                        <input type="text" inputmode="numeric" class="form-control" id="preco" name="preco" placeholder="000,00" required>
                        <div class="invalid-feedback">
                          O preço do produto é obrigatório.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="descricao" class="form-label">Descrição</label>
                      <textarea rows="5" class="form-control" id="descricao" name="descricao" required></textarea>
                      <div class="invalid-feedback">
                        Descrição do produto é obrigatória.
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="imagem" class="form-label">Imagem (Tamanho máx. 5 MB)</label>
                      <input type="file" accept=".jpg" class="form-control" value="Carregar arquivo" id="imagem" name="imagem" required>
                      <div class="invalid-feedback">
                        Escolha a imagem do produto.
                      </div>
                    </div>
                  <hr class="my-4">
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Salvar Produto</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Mensagens Toast -->
    <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 11">
      <div id="liveToast" class="toast hide bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body"></div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/form_produto.js"></script>
  </body>
</html>