<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHASISWA</title>
</head>
<body>
    <h3>Mahasiswa</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($list_mhs as $mhs) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mhs -> nim ?></td>
                <td><?php echo $mhs -> nama ?></td>
                <td><?php echo $mhs -> gender ?></td>
                <td><?php echo $mhs -> ipk?></td>
                <td><?php echo $mhs -> predikat() ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>