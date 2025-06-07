<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cek Skor Volunteer</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    label, input { display: block; margin-top: 10px; }
    input { padding: 5px; width: 200px; }
    button { margin-top: 15px; padding: 7px 15px; }
    .hasil { margin-top: 20px; font-weight: bold; }
  </style>
</head>
<body>
  <h2>CEK SKOR VOLUNTEER</h2>
  <form action="proses.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">LIHAT SKOR</button>
  </form>
</body>
</html>