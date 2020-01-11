<?php
/**
 * Скрипт, который выводит календарь на текущий месяц в виде таблицы.
 * Столбцы таблицы должны представлять дни недели от понедельника до воскресенья, а в ячейках таблицы выводятся числа месяца.
 * 
 * @author Alexandr Toropov <toropovsite@yandex.ru>
 */

 $name_month = date('F'); //название месяца
 $name_month .= ' - ' . date('Y'); //добавляем год к названию месяца
 $current_num_day = date('j'); //текущий день в месяце
 $sum_days_of_month = date('t'); //количество дней в месяце
 $firt_day_of_week = date('w', strtotime(date('Y-m-') . '01'));

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Calendar</title>
 </head>
 <body>
     <table style="border: 2px solid #f9f9f9;">
        <tr>
            <th cols="7">
                <b><?=$name_month?></b>
            </th>
        </tr>
        <tr>
            <td>Понедельник</td>
            <td>Вторник</td>
            <td>Среда</td>
            <td>Четверг</td>
            <td>Пятница</td>
            <td>Суббота</td>
            <td>Воскресенье</td>
        </tr>
        <tr>
            <?php 
            $j = 0;
            while ($j < ($firt_day_of_week-1)) {
                echo '<td></td>' . PHP_EOL;
                $j++;
            }    
            for ($i = 1; $i <= $sum_days_of_month; $i++) {
                echo '<td>' . $i . '</td>' . PHP_EOL;
                $j++;
                if ($j == 7) {
                    echo '</tr><tr>' . PHP_EOL;
                    $j = 0;
                }
            }
            ?>
        </tr>    
     </table>
 </body>
 </html>

