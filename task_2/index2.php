<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link <link rel="stylesheet" href="../task_1/styles.css">
    <title>Document</title>
</head>

<body>
    <?php
        $x1 = "true";
        $x2 = "false";
        $x3 = 1;
        $x4 = 0;
        $x5 = -1;
        $x6 = "1";
        $x7 = null;
        $x8 = "php";
        $y1 = "true";
        $y2 = "false";
        $y3 = 1;
        $y4 = 0;
        $y5 = -1;
        $y6 = "1";
        $y7 = null;
        $y8 = "php";
    ?>

    <h2>Гибкое сравнение в PHP</h2>
    <br>
    <br>
    <table>
        <tr class="head_row">
            <th></th>
            <th class="x1">true</th>
            <th class="x2">false</th>
            <th class="x3">1</th>
            <th class="x4">0</th>
            <th class="x5">-1</th>
            <th class="x6">"1"</th>
            <th class="x7">null</th>
            <th class="x8">"php"</th>
        </tr>

        <tr>
            <td class="y1">true</td>
            <td class="median"><?php $output = ($x1 == $y1) ? "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y1) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y2">false</td>
            <td><?php $output = ($x1 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x2 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y2) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y3">1</td>
            <td><?php $output = ($x1 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x3 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y3) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y4">0</td>
            <td><?php $output = ($x1 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x4 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y4) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y5">-1</td>
            <td><?php $output = ($x1 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x5 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y5) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y6">"1"</td>
            <td><?php $output = ($x1 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x6 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y6) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y7">null</td>
            <td><?php $output = ($x1 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x7 == $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 == $y7) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y8">"php"</td>
            <td><?php $output = ($x1 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 == $y8) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x8 == $y8) ?  "true" : "false"; echo($output) ?></td>
        </tr>

    </table>
    <br>
    <br>
    <h2>Жёсткое сравнение в PHP</h2>
    <br>
    <br>
    <table>
        <tr class="head_row">
            <th></th>
            <th class="x1">true</th>
            <th class="x2">false</th>
            <th class="x3">1</th>
            <th class="x4">0</th>
            <th class="x5">-1</th>
            <th class="x6">"1"</th>
            <th class="x7">null</th>
            <th class="x8">"php"</th>
        </tr>

        <tr>
            <td class="y1">true</td>
            <td class="median"><?php $output = ($x1 == $y1) ? "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y1) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y1) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y2">false</td>
            <td><?php $output = ($x1 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x2 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y2) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y2) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y3">1</td>
            <td><?php $output = ($x1 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x3 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y3) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y3) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y4">0</td>
            <td><?php $output = ($x1 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x4 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y4) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y4) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y5">-1</td>
            <td><?php $output = ($x1 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x5 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y5) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y5) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y6">"1"</td>
            <td><?php $output = ($x1 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x6 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y6) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y6) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y7">null</td>
            <td><?php $output = ($x1 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x7 === $y7) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x8 === $y7) ?  "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="y8">"php"</td>
            <td><?php $output = ($x1 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x2 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x3 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x4 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x5 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x6 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($x7 === $y8) ?  "true" : "false"; echo($output) ?></td>
            <td class="median"><?php $output = ($x8 === $y8) ?  "true" : "false"; echo($output) ?></td>
        </tr>

    </table>
</body>

</html>