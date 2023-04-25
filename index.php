<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\Number;
use App\Services\Table;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Megasena</title>
        <style type="text/css">
            table, tr, td {
                border: 1px solid #333;
                border-collapse: collapse !important;
                text-align: center;
            }

            table {
                margin-bottom: 30px;
            }

            td {
                padding: 4px;
            }

            .blue {
                background-color: #00F;
                color: #FFF;
            }
        </style>
    </head>

    <body>
        <?php
            for ($i = 1; $i <= 3; $i++) {
                echo Table::mountTable(Number::getNumbers());
            }
        ?>
    </body>
</html>
