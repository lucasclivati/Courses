<!-- https://www.php.net/manual/pt_BR/language.basic-syntax.phptags.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags PHP</title>
</head>
<body>
    <p>Este parágrafo é HTML e será ignorado na interpretação do PHP.</p>
    <?php
        echo '<p>Este paragráfo será interpretado pelo PHP.</p>';
    ?>
    <?='<p>Este parágrafo também é interpretado.</p>'?>
</body>
</html>