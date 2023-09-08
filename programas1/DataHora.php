<?php

echo "Hoje é dia " . date('d/m/Y');
echo "<br>agora são" . date('H:i:s');
echo "<br>Hoje é " . date('N');
echo "<br>Quantos dias faltão para o Domingo: " . date('n');

$numeroDiaSemana = date('N');

    $nomesDias = [
        1 => 'Segunda-feira',
        2 => 'Terça-feira',
        3 => 'Quarta-feira',
        4 => 'Quinta-feira',
        5 => 'Sexta-feira',
        6 => 'Sábado',
        7 => 'Domingo'
    ];

    echo '<br>Hoje é o dia ' . $numeroDiaSemana . ' (' . $nomesDias[$numeroDiaSemana] . ').';


//ex:
# 1. date('d/m/Y') se troca para y o ano vai fica co dois digitos
# 2. date('H:i:s') se troca para h vai para o formato A.M e P.M
# 3. Obtenha o número do dia da semana (1 a 7) . date('N');
# 4. para obiter quantos dias faltão para o prosimo sabado
# 5. date('d/m/Y') se troca para M o php vai ler o mês
