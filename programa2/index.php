<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>

<body>
    <?php
    function linha($semana)
    {
        $linha = '<tr>';
        foreach ($semana as $dia) {
            $linha .= "<td>$dia</td>";
        }
        $linha .= '</tr>';
        return $linha;
    }

    function calendario()
    {
        $calendario = '';
        $dia = 1;
        $semana = [];

        while ($dia <= 31) {
            array_push($semana, $dia);

            if (count($semana) == 7 || $dia == 31) {
                $calendario .= linha($semana);
                $semana = [];
            }

            $dia++;
        }

        return $calendario;
    }
    ?>
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>
        <?php echo calendario(); ?>
    </table>
</body>

</html>