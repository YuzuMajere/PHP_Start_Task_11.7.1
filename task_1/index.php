<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>


<body>
    <?php
    $a1 = 0;
    $b1 = 0;
    $a2 = 0;
    $b2 = 1;
    $a3 = 1;
    $b3 = 0;
    $a4 = 1;
    $b4 = 1;
?>
    <table class='table'>
        <tr>
            <th class="a">A</th>
            <th class="b">B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <td class="a1">0</td>
            <td class="b1">0</td>
            <td><?php $output = (!$a1) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a1 || $b1) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a1 && $b1) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a1 xor $b1) ? "true" : "false"; echo($output)?></td>
        </tr>
        <tr>
            <td class="a2">0</td>
            <td class="b2">1</td>
            <td><?php if (!$a2) echo "true"; else echo "false" ?></td>
            <td><?php $output = ($a2 || $b2) ? "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($a2 && $b2) ? "true" : "false"; echo($output) ?></td>
            <td><?php $output = ($a2 xor $b2) ? "true" : "false"; echo($output) ?></td>
        </tr>
        <tr>
            <td class="a3">1</td>
            <td class="b3">0</td>
            <td><?php $output = (!$a3) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a3 || $b3) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a3 && $b3) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a3 xor $b3) ? "true" : "false"; echo($output)?></td>
        </tr>
        <tr>
            <td class="a4">1</td>
            <td class="b4">1</td>
            <td><?php $output = (!$a4) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a4 || $b4) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a4 && $b4) ? "true" : "false"; echo($output)?></td>
            <td><?php $output = ($a4 xor $b4) ? "true" : "false"; echo($output)?></td>
        </tr>
    </table>
</body>

</html>