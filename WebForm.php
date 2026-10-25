<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan Produk</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: #dde8ec;
        font-family: "Segoe UI", Arial, sans-serif;
        color: #14263a;
      }
      h1 {
        margin-bottom: 30px;
      }
      .container {
        display: flex;
        flex-direction: column;
        background-color: white;
        width: 35%;
        margin: 40px auto;
        padding: 20px;
        justify-content: center;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(20, 38, 58, 0.15);
      }
      .input {
        display: flex;
        flex-direction: column;
        margin: 10px 0;
      }
      label {
        margin-bottom: 5px;
        font-weight: 600;
      }
      input {
        width: 100%;
        padding: 8px;
        border: 2px solid #c3d1d9;
        border-radius: 8px;
      }
      input:focus {
        outline: none;
        border-color: #2457f5;
      }
      .button {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        background: #14263a;
        border-radius: 8px;
        cursor: pointer;
        border: none;
        color: white;
        font-weight: bold;
      }
      .button:hover {
        background-color: #2457f5;
      }
      #hasil {
        margin-top: 15px;
        background: #f4f8fa;
        padding: 10px;
        border: 2px dashed #c3d1d9;
        border-radius: 8px;
        text-align: left;
      }
      #hasil b {
        background: #ffd84d;
        padding: 2px 6px;
      }
    </style>
  </head>

  <body>
    <center>
      <h1>Form Pemesanan Produk</h1>
      <div class="container">
        <form action="" method="POST">
          <div class="input">
            <label for="produk">Nama Produk</label>
            <input type="text" name="produk" id="" />
          </div>

          <div class="input">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="" />
          </div>

          <div class="input">
            <label for="harga">Harga Satuan (Rp)</label>
            <input type="number" name="harga" id="harga" />
          </div>

          <input type="submit" class="button" name="btn_proses" value="Hitung Total" />
          <input type="reset" class="button" value="Hapus" />

          <div id="hasil">
            
<?php
if (isset($_POST['btn_proses'])) {

    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $harga  = $_POST['harga'];

    $total = $jumlah * $harga;

    echo "<b>Nama Produk:</b> " . $produk . "<br><br>";

    echo "<b>Jumlah:</b> " . $jumlah . "<br><br>";

    echo "<b>Harga Satuan:</b> Rp " .
         number_format($harga, 0, ',', '.') . "<br><br>";

    echo "<b>Total Harga:</b> Rp " .
         number_format($total, 0, ',', '.');

} else {
    echo "Hasil perhitungan akan tampil di sini.";
}
?>

          </div>
        </form>
      </div>
    </center>
  </body>
</html>
