<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Belanja</title>
</head>

<body class="row">
    <div class="col-8">
        <h2>Belanja Online</h2>
        <hr>
        <br>
        <form method="POST" action="formbelanja.php">
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="customer" name="customer" placeholder="Masukkan nama customer" type="text"
                        required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"
                            required="required">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"
                            required="required">
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"
                            required="required">
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah pembelian" type="text" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-4">
        <ul class="list-group">
            <li class="list-group-item active">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">KULKAS : 3.100.000</li>
            <li class="list-group-item">MESIN CUCI : 3.800.000</li>
            <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>

    <hr class="col-12">
    <div class="col-12">
        <?php
        if (isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

        if ($produk == "tv") {
                $total_belanja = $jumlah * 4200000;
        } elseif ($produk == "kulkas") {
                $total_belanja = $jumlah * 3100000;
        } elseif ($produk == "mesin cuci") {
                $total_belanja = $jumlah * 3800000;
        } else {
                echo "Jangan Maling Pak :)";
        }

        $total = number_format($total_belanja, 0, ".", ".");

        echo "Nama Customer: $customer <br>";
        echo "Produk: $produk <br>";
        echo "Jumlah Beli: $jumlah <br>";
        echo "Total Belanja: Rp. $total,-";
        }
        ?>
    </div>
</body>

</html>