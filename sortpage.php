<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Purtruet</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php">
                    <button class="btn btn-success">Go back!</button>
                </form>
            </div>
        </div>
        <?php
            $wppcontent = $_POST['wppbkp'];
            $delimiter = $_POST['delimiter'];

            $wppcontent = explode($delimiter, $wppcontent);

            foreach ($wppcontent as $i) {
                echo '
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">';
                                echo nl2br($i);
                echo '
                            </div>
                        </div>
                    </div>
                </div>';
            }
        ?>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>