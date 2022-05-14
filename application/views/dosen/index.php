<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOSEN</title>
</head>
<body>
    <h3>Dosen</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($list_dsn as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>