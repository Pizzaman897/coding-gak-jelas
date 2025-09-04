<?php
 $nama_siswa = "Edward";

 $student = ['Edward', 'Budi', 'Caca', 'Deni', 'Eka'];








 $teachers =[
    ['name' => 'pak sudi', 'nip' => '12345'],
    ['name' => 'bu lita', 'nip' => '67890'],
    ['name' => 'pak joko', 'nip' => '54321'],
 ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UI</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #414141ff;
    }
    </style>
</head>
<body>
    <?php include './_components/header.php'?>

    <!-- menyisipkan kode PHP di HTML -->
    <?php echo $nama_siswa;?>
    <br>
    <!-- menapilkan data array -->
     <h1>Daftar Siswa</h1>
     <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($student as $index => $student): ?>
                <tr>
                    <td>
                        <?php echo $index + 1; ?>
                    </td>
                    <td>
                        <?php echo $student; ?>
                    </td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
     </table>
     <br>
<!-- Menampilkan data array assosiatif -->
        <h1>Daftar Guru</h1>
    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama guru</th>
                <th>NIP</th>
            </tr>
        <tbody>
            <?php foreach($teachers as $index => $teacher): ?>
                <tr>
                    <td>
                        <?= $index + 1; ?>
                    </td>
                    <td>
                        <?= $teacher['name']; ?>
                    </td>           
                    <td>
                        <?= $teacher['nip']; ?>
                    </td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php include './_components/footer.php'?>


</body>
</html>