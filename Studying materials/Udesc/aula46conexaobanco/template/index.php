<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/83b17fe985.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Detalhes do produto -->
    <div class="modal fade" id="produto-detalhe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <h4 class="h4" id="produto-nome"></h4>
                        <h6 class="h6" id="produto-resumo"></h6>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="produto-imagem">
                        <img src="" alt="" class="rounded w-50 mx-auto d-block">
                    </div>
                    <div id="produto-descricao"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <div class="px-4 py-3 my-5 text-center">
        <h1 class="display-5 fw-bold">Relação de Produtos</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Relação de produtos carregados dinamicamente a partir da base de dados MySQL.
                Cada um dos itens pode ser pressionado para exibir detalhadamente as informações de cada item.
            </p>
        </div>
    </div>

    <!-- Lista de produtos -->
    <main>
        <div class="container py-5">
            <div id="produto-list" class="list-group w-auto"></div>
        </div>
    </main>

    <!-- Footer -->
    <div class="container">
        <footer class="pt-5 my-5 text-muted border-top">
            Curso Desenvolvedor Web Full Stack · © Udesc Balneário Camboriú
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        // Carregar Produtos
        $.get('src/getProdutoAll.php')
            .done(function(html) {
                $('#produto-list').append(html);
            });

        // Detalhes do produto
        $(document).on('click', '.produto-list-item', function() {
            let produto_id;
            produto_id = $(this).data('id');

            $.get('src/getProdutoById.php', {
                    produto_id: produto_id
                })
                .done(function(html) {
                    $('#produto-detalhe .modal-dialog').html(html);
                    $('#produto-detalhe').modal('show');
                });

            return false;
        })
    </script>
</body>

</html>