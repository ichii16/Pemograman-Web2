<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #navbar{
            background-color: black;
            font-size: 15px;
            color: antiquewhite;
        }

        .nav-link{
            display: inline-block;
            width: 100px;
            height: 50px;
            text-align: top;
            line-height: 30px;
        }

        .selected {
            background-color: gray;
        }
        
        footer{
            background-color: black;
            color: white;
            height: 30vh;
        }

        .img{
            height: 50vh;
            width: 50vh;
        }
        
    </style>
</head>
<body>
<nav id="navbar">
        <a class="nav-link selected">Artikel 1</a>
        <a class="nav-link">Artikel 2</a>
        <a class="nav-link">Artikel 3</a>
        <a class="nav-link">Artikel 4</a>
        <a class="nav-link">Artikel 5</a>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <h1>Ustad Adi Hidayat</h1>
            <p>Ustad Adi Hidayat adalah seorang pendakwah dan pembicara asal Indonesia yang terkenal karena kajian-kajiannya tentang Islam dan dakwahnya yang inspiratif. Ia lahir pada 25 Januari 1981 di Purwakarta, Jawa Barat, dan merupakan lulusan Pondok Pesantren Darul Quran, Jakarta. Selama ini, Ustad Adi Hidayat dikenal sebagai sosok yang sangat aktif dalam mengajarkan agama Islam dan memberikan motivasi serta inspirasi kepada banyak orang.</p>
            <p>Karir dakwah Ustad Adi Hidayat dimulai ketika ia masih duduk di bangku SMA. Ia mulai berdakwah dengan mengisi ceramah di masjid-masjid di sekitar tempat tinggalnya. Setelah lulus dari Pondok Pesantren Darul Quran, ia melanjutkan studinya di Fakultas Syariah dan Hukum Universitas Islam Negeri Syarif Hidayatullah Jakarta. Selain kuliah, ia juga terus berdakwah dan mengajar agama Islam di berbagai tempat.</p>
        </div>
        <div class="col-md-6 mt-4">
            <img class="img" src="https://muhammadiyah.or.id/wp-content/uploads/2020/12/ustaz-adi-hidayat-4_1.jpg" alt="">
        </div>
    </div>
</div>

<footer class="mt-4">
        <div class="row">
            <div class="col-md-12 mt-4 ml-4">
                <address>
                    <strong>Twitter, Inc.</strong>
                    <br />
                     795 Folsom Ave, Suite 600
                     <br /> 
                     San Francisco, CA 94107
                     <br /> 
                     <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
		</div>
</footer>

</body>
</html>