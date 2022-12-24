<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 37</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="mt-5 p-5 shadow-sm bg-light">
            <form action="desconto.php">
                <div class="row">
                    <div class="col-6 pb-2">
                        <label for="indice" class="form-label">Produto</label>
                        <select name="indice" id="indice" class="form-select">
                            <option value="0">Camiseta</option>
                            <option value="1">Calça</option>
                        </select>
                    </div>
                    <div class="col-6 pb-2">
                        <label for="pagamento" class="form-label">Forma de Pagamento</label>
                        <select name="pagamento" id="pagamento" class="form-select">
                            <option value="c">Crédito</option>
                            <option value="d">Débito</option>
                        </select>
                    </div>
                    <div class="col-12 pb-2">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>