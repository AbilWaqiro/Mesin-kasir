<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>🍗 Check out</title>
</head>
<style>
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

h1{
  color: #5DEBD7;
}

h2 {
  font-size: 3rem;
  color: #5DEBD7;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  padding-left: 15px;
}

h2 .bx {
  font-size: 2rem;
  margin-left: 1rem;
  animation: bx-wave 1s infinite;
}

.confirmation {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    width: 40%;
    text-align: center;
}

button{
    padding: 8px;
    background-color: #5DEBD7;
    border: none;
    border-radius: 2px;
    font-size: small;
}

@keyframes bx-wave {
  0%,
  100% {
    transform: rotate(0);
  }
  20%,
  60% {
    transform: rotate(20deg);
  }
  40%,
  80% {
    transform: rotate(-20deg);
  }
}
</style>
<body>
        <div class="confirmation">
            <h1>Cicago <i class='bx bxs-shopping-bags'></i>Mart</h1>
            <h2>Transaksi Berhasil <i class='bx bx-party'></i> </h2>
            <button><a href="index.php"><i class='bx bx-arrow-back'></i></a></button>
        </div>
</body>
</html>