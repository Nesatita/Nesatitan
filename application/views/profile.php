<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Kelas:</td>
            <td><?php echo $kelas; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Gambar:</td>
            <td><img src="<?php echo base_url('path/to/image.jpg'); ?>" alt="Profil Picture"></td>
        </tr>
    </table>
</body>
</html>