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
