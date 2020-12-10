<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F to C</title>
</head>
<style>
    .outer{
        margin:auto;
        text-align: center;
    }
</style>
<body>
    <table cellpadding="15px" class="outer">
        <caption><h1>F to C</h1></caption>
        <tr>
            <td><h1>While Loop</h1></td>
            <td><h1>For Loop</h1></td>
        </tr>
        <tr>
            <td>
                <table border="1px" cellpadding="15px">
                    <tbody>
                        <?php
                        $i = 1;
                        $f = -50;
                        while ($f <= 50) {
                            $c = ($f - 32) * 5 / 9;
                            $c = sprintf("%.2f", $c);
                            echo "<tr><td>$i</td>
					<td>$f</td>
					<td>$c</td></tr>";
                            $f += 5;
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </td>
            <td>
                <table border="1px" cellpadding="15px">
                    <tbody>
                        <?php
                        $i = 1;
                        for ($f = -50; $f <= 50; $f += 5) {
                            $c = ($f - 32) * 5 / 9;
                            $c = sprintf("%.2f", $c);
                            echo "<tr><td>$i</td>
                                <td>$f</td>
                                <td>$c</td></tr>";

                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>