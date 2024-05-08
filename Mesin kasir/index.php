<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Barang</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 525px;
      margin: 20px auto;
      padding: 17px;
      background-color: #fff;
      border-radius: 8px 0 8px 0;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #5DEBD7;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    button[type="submit"] {
      padding: 6px;
      margin-bottom: 15px;
      border-radius: 4px 0 4px 0;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    button[type="submit"] {
      background-color: #5DEBD7;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #A3FFD6;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cicago <i class='bx bxs-shopping-bags'></i>Mart</h1>
    <form action="bayar.php" method="post">
      <label for="nama">Nama Barang:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="jumlah">Jumlah Barang:</label>
      <input type="number" id="jumlah" name="jumlah" required>

      <label for="harga">Harga Barang:</label>
      <input type="number" id="harga" name="harga" required>

      <button type="submit" name="submit">Tambahkan ke Keranjang</button>
    </form>
  </div>
</body>
</html>
