<?php
$rowCount = 5;
?>

<table class="striped">
    <thead>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 3</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $rowCount; $i++) {
            ?>
            <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>