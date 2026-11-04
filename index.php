<?php
require_once 'koneksi.php';

$stmt = $pdo->query("SELECT * FROM mahasiswa ORDER BY id");
$data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Data Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        <?php foreach ($data as $mhs): ?>
        <tr>
            <td><?= htmlspecialchars($mhs['nim']) ?></td>
            <td><?= htmlspecialchars($mhs['nama']) ?></td>
            <td><?= htmlspecialchars($mhs['email'] ?? '') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script src="js/script.js"></script>
</body>
</html>