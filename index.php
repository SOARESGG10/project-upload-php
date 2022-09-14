<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Upload File</title>
</head>

<body>

    <div class="container">
        <form action="./assets/php/upload.php" enctype="multipart/form-data" class="upload-files" method="POST">
            <div class="inputs">
                <h2 id="title">UPLOAD - PHP</h2>
                <div class="text-input">
                    <label for="file-upload">Clique para fazer o upload de um arquivo</label>
                </div>
                <input class="input-file" type="file" name="file" id="file-upload" value="" required>
                <input class="input-button" name="submit" type="submit" value="Enviar">
            </div>
        </form>
        <footer class="footer">
            <h3 id="members">Integrantes</h3>
            <p class="member">Rafael Henrique</p>
            <p class="member">Eduardo</p>
            <p class="member">Fabricio</p>
            <p></p>
            <p class="member">Leonardo dos Santos</p>
            <p class="member">Rodrigo Souza Marques</p>
        </footer>
    </div>

</body>

</html>