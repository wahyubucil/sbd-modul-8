<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Cuti</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        header {
            width: 100%;
            text-align: center;
            background: #304ffe;
            color: #ffffff;
            float: left;
        }

        main {
            float: left;
            margin-top: 1.5em;
            width: 100%;
            max-width: 768px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        label, input {
            display: block;
        }

        input {
            margin: 10px 0 1em 0;
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            width: auto;
            margin-top: 1.5em;
        }
    </style>
</head>
<body>
    <header>
        <h1>TABEL CUTI</h1>
    </header>
    <main>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            switch ($page) {
                case "input":
                    include "input.php";
                    break;
                case "edit":
                    include "edit.php";
                    break;
                case "delete":
                    include "delete.php";
                    break;
                default:
                    include "select.php";
            }
        ?>
    </main>
</body>
</html>