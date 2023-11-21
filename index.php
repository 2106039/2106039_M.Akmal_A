<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PARKING</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <h1>E-PARKING</h1>
        <form method="post" action="proses_input.php">
            <label for="Jeniskendaraan">JenisKendaraan :</label>
            <input type="text" name="Jeniskendaraan" id="Jeniskendaraan" maxlength="20" class="form-input" required><br>

            <label for="Nomerkendaraan">Nomer kendaraan :</label>
            <input type="number" name="Nomerkendaraan" id="Nomerkendaraan" maxlength="20" class="form-input" required><br>
            
            <label for="jammasuk">jammasuk :</label>
            <input type="time" name="jammasuk" id="jammasuk" maxlength="20" class="form-input" required><br>

            <label for="Password">Password :</label>
            <input type="Password" name="Password" id="Password" maxlength="20" class="form-input" required><br>

            <textarea name="alamat" id="alamat" placeholder="alamat" cols="30" class="form-input" required rows="5"></textarea><br>

            

            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>

</body>

</html>