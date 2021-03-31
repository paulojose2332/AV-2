<!DOCTYPE HTML>
<html>
<style>
    html,
    body {
        height: 100%;
        background-color: #D4F1F4;
    }

    .container {
        width: 100%;
        height: 100%;
        margin: auto;
        text-align: center;
        display: flex;
        vertical-align: middle;
    }

    .card {
        border-radius: 25px;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 550px;
        height: 400px;
        margin: auto;
        padding-top: 60px;
        text-align: center;
        vertical-align: middle;
    }
</style>

<head>
    <title>Conversor de unidades</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>
                Informe a unidade para conversão e o valor.
            </h2>
            <br />
            <br />

            <form action="" method="get">
                <div>
                    <div>
                        Unidade
                    </div>
                    <br />
                    <select name="conversionType">
                        <option value="0">Gramas para kilos</option>
                        <option value="1">Gramas para toneladas</option>
                        <option value="2">Kilos para gramas</option>
                        <option value="3">Kilos para toneladas</option>
                        <option value="4">Toneladas para gramas</option>
                        <option value="5">Toneladas para kilos</option>
                    </select>
                </div>
                <br />
                <br />
                <div>
                    <div>
                        Valor
                    </div>
                    <br />
                    <input name="original" type="text" />
                </div>
                <br />
                <br />

                <div>
                    <input type="submit" value="Calcular" />
                </div>
                <be />
                <br />
                <br />
            </form>
            <?php

            if (!isset($_GET["original"])) {
                echo "<strong>Informe os dados pedidos</strong>";
            } else if (!is_numeric(($_GET["original"]))) {
                echo "<strong>Informe dados validos</strong>";
            } else if (isset($_GET["conversionType"], $_GET["original"])) {

                $value = $_GET["original"];
                $type = $_GET["conversionType"];
                $originalType = 'gramas';
                $newType = 'kilos';

                switch ($type) {
                    case 0:
                        $result = floatval($value / 100);
                        break;
                    case 1:
                        $result = floatval($value / 1000);
                        $newType = 'toneladas';
                        break;
                    case 2:
                        $result = floatval($value * 100);
                        $originalType = 'kilos';
                        $newType = 'gramas';
                        break;
                    case 3:
                        $result = floatval($value / 100);
                        $originalType = 'kilos';
                        $newType = 'toneladas';
                        break;
                    case 4:
                        $result = floatval($value * 100);
                        $originalType = 'toneladas';
                        $newType = 'gramas';
                        break;
                    case 5:
                        $result = floatval($value * 1000);
                        $originalType = 'toneladas';
                        break;
                }

                echo "<strong>$value $originalType são equivalentes a $result $newType</strong>";
            } else {
                echo "<strong>Informe os dados pedidos</strong>";
            }

            ?>
        </div>
    </div>
</body>

</html>