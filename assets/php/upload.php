<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/upload.css">
    <title>Uploads</title>
</head>

<body>

    <div class="container">
        <div class="images">
            <?php
            // Pegando o clique do botão
            if (isset($_POST['submit'])) {
                // Definindo que extensões seram permititidas.
                $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'pdf'];
                // Obtendo o nome do arquivo
                $nomeArquivo = $_FILES['file']['name'];
                // Obtendo a extensão do arquivo.
                $extensaoArquivo = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

                // Verificando se a extensão do arquivo é permitido.
                if (in_array($extensaoArquivo, $extensoesPermitidas)) {
                    // Definindo a pasta aonde serão guardados os arquivos
                    $pasta = '../uploads/';
                    // Definindo o caminho da pasta + o nome do arquivo.
                    $novoArquivo = $pasta . $nomeArquivo;
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $novoArquivo)) {
                        $message = 'Arquivo enviado com sucesso!';
            ?>
                        <!-- Tags HTML inbutidas no meio do código PHP. -->
                        <?php
                        // Caso a extensão não seja ".pdf", o arquivo será exibido em uma tag img.
                        if ($extensaoArquivo !== 'pdf') { ?>
                            <img src="<?php echo $novoArquivo ?>" alt="">
                        <?php
                        } else {
                            // Caso a extensão seja do tipo ".pdf", o arquivo será exibido em uma tag iframe.
                        ?>
                            <iframe src="<?php echo $novoArquivo ?>" frameborder="0"></iframe>
                        <?php
                        }
                        ?>
            <?php
                    } else {
                        // Caso ocorra uma erro no upload no arquivo irá ser informado.
                        $message = 'Ocorreu um erro no envio do arquivo, tente novamente.';
                    }
                } else {
                    // Caso o tipo de extensão não seja permitida será informado.
                    $message =  'Este tipo de arquivo não é permitido!';
                }
            }
            ?>
            <!-- No parágrafo será exibido a informação da ação. -->
            <p class="info"><?php echo $message ?></p>
        </div>
    </div>
</body>

</html>