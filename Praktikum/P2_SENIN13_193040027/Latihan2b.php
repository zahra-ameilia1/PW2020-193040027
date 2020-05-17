<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <!-- TULISAN KOLOM KE SAMPING -->
    <tr>
        <th></th>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
        <th>Kolom <?= $i; ?></th>
        <?php endfor; ?>
    </tr>
    <!-- TULISAN BARIS KE BAWAH -->
    <tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
        <th>Baris <?= $j; ?></th>
    
    <!-- ISI BARIS DAN KOLOM -->
        <?php for($k = 1; $k <= 5; $k++) : ?>
            <td>Baris <?= $j; ?>, Kolom <?= $k; ?></td>
        <?php endfor; ?>
    </tr>
        <?php endfor;?>
            <!-- Tambahkan baris kode php untuk menampilkan bagian body table -->
    </table>
    <br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>