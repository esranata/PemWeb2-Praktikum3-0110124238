<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<form method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control" required>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="number" class="form-control" min="1" required>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = intval($_POST['jumlah']);

    // Daftar harga produk
    $harga_produk = [
        "TV" => 3200000,
        "Kulkas" => 3500000,
        "Mesin Cuci" => 4800000
    ];

    // Hitung total belanja
    if (isset($harga_produk[$produk])) {
        $total_harga = $jumlah * $harga_produk[$produk];
    } else {
        echo "<div class='alert alert-danger'>Produk tidak valid!</div>";
        exit;
    }

    // Format ke rupiah
    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0, ",", ".") . " ,-";
    }

    echo "<div class='alert alert-success'>
            <strong>Detail Pembelian:</strong><br>
            Nama Customer: $customer <br>
            Produk: $produk <br>
            Jumlah: $jumlah <br>
            Total Harga: " . formatRupiah($total_harga) . "
          </div>";
}
?>

</body>
</html>