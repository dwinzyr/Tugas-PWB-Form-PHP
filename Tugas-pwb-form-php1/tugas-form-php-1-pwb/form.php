<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title>Halaman Form</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    
    <form method ="POST" action="welcome.php">

    <p>Nama lengkap:</p>
    <input type="text" name="namaLengkap" id="namaLengkap" >
    <p>Gender</p>
    <input type="radio" name="gender" id="male" value="Male">Male
    <br>
    <input type="radio" name="gender" id="female" value="Female">Female
    <p>Nationalty</p>
    <select name="country">
        <option  value="Indonesia">Indonesia</option>
        <option  value="China">China</option>
    </select>
    <p>Language Spoken</p>
    <input type="checkbox" name="bahasa" id="indonesia" value="Indonesia">Indonesia
    <br>
    <input type="checkbox" name="bahasa" id="china" value="China">China
    <p>Bio</p>
    <br>
    <textarea cols="20" rows="10" name="bio"></textarea>
    <br>
    <a href="welcome.php"><button>Sign Up</button></a>

    </form>
</body>
</html>