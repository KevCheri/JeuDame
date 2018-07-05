
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Titre</title>
    <style>
        table tr:nth-child(even) td:nth-child(even),
        table tr:nth-child(odd) td:nth-child(odd) {
            background-color:beige;
        }
        table tr:nth-child(even) td:nth-child(odd),
        table tr:nth-child(odd) td:nth-child(even) {
            background-color: crimson;
        }
    </style>
</head>

<body>
<table border="10px" style="width:300px; height:300px;">
    <?php for($rowId = 0; $rowId < $board->getSize(); $rowId++): ?>
        <tr>
            <?php for($colId = 0; $colId < $board->getSize(); $colId++): ?>
                <td class="<?php echo $board->getCell($rowId, $colId) ?>">
                    <?php echo $board->getCell($rowId, $colId) ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>