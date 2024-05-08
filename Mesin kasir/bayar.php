<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="s.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<h2><button><a href="index.php"><i class='bx bx-arrow-back'></i></a></button> Keranjang Belanja</h2>
    <table>
      <thead>
        <tr>
          <th>Barang</th>
          <th>Jumlah</th> 
          <th>Harga</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        session_start();

        class Barang {
            public $nama;
            public $harga;
            public $jumlah;

            public function __construct($nama, $harga, $jumlah) {
                $this->nama = $nama;
                $this->harga = $harga;
                $this->jumlah = $jumlah;
            }

            public function getTotal() {
                return $this->harga * $this->jumlah;
            }
        }

        class Keranjang {
            public $items = array();

            public function tambahBarang(Barang $barang) {
                $this->items[] = $barang;
            }

            public function hapusBarang($index) {
                if (isset($this->items[$index])) {
                    unset($this->items[$index]);
                }
            }

            public function hitungTotal() {
                $total = 0;
                foreach ($this->items as $item) {
                    $total += $item->getTotal();
                }
                return $total;
            }
        }

        if (!isset($_SESSION['keranjang'])) {
            $_SESSION['keranjang'] = new Keranjang();
        }

        if (isset($_POST['submit']) && isset($_POST['nama']) && isset($_POST['jumlah']) && isset($_POST['harga'])) {
            $nama = $_POST['nama'];
            $jumlah = (int)$_POST['jumlah'];
            $harga = (int)$_POST['harga'];
            $barang = new Barang($nama, $harga, $jumlah);
            $_SESSION['keranjang']->tambahBarang($barang);
        }

        if (isset($_GET['hapus']) && is_numeric($_GET['hapus'])) {
            $index = (int)$_GET['hapus'];
            $_SESSION['keranjang']->hapusBarang($index);
        }

        $total = $_SESSION['keranjang']->hitungTotal();
        foreach ($_SESSION['keranjang']->items as $index => $item) {
            echo "<tr>";
            echo "<td>" . $item->nama . "</td>";
            echo "<td>" . $item->jumlah . "</td>";
            echo "<td>" . $item->harga . "</td>";
            echo "<td>" . $item->getTotal() . "</td>";
            echo "<td><a href='bayar.php?hapus=$index'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3">Total</th>
          <th><?php echo $total; ?></th>
          <th><a class='kirim' href='akhir.php'">buy</a></th>
        </tr>
      </tfoot>
    </table>
    
</body>
</html>





      