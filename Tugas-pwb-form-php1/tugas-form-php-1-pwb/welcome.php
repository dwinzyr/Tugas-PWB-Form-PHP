<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-Page</title>
</head>
<body>

    <?php
        $namaLengkap = $_POST['namaLengkap'];
        $gender = isset ($_POST['gender']) ? $_POST['gender']: "tidak ada";
        $country = $_POST['country'];
        $bahasa = isset ($_POST['bahasa']) ? $_POST['bahasa']: "tidak ada";
        $bio = $_POST['bio'];
    ?>

    <div>
        <p>Nama Lengkap: <?= $namaLengkap?></p>
        <p>Gender: <?= $gender?></p>
        <p>Nationalty: <?= $country?></p>
        <p>Bahasa: <?= $bahasa?></p>
        <p>Bio: <?= $bio?></p>
    </div>
</body>
</html>