<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 40</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>
  <body class="text-light bg-dark">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57">
        <h2>TODOS OS PRODUTOS</h2>
        <p class="lead">
          Listagem de todos os produtos
        </p>
        <a href="form_produto.php" class="btn btn-primary btn-lg">Cadastrar Novo Produto</a>
      </div>
      <div class="album py-5 bg-light text-dark">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="produto-lista" style="min-height: 400px">
            <!-- Os produtos serão listados aqui -->
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Voltar ao topo</a>
        </p>
        <p class="mb-1">Template Bootstrap.</p>
        <p class="mb-0">Os arquivos originais estão disponiveis <a href="https://getbootstrap.com/docs/5.0/examples/album/">aqui.</a>.</p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>