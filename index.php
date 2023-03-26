<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=fd753f26&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-fluid" style="background-color:gray">;
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Top Movies</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="spiderman.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Spiderman</h5>
        <p class="card-text">Spider-Man (bahasa Indonesia: Manusia Laba-laba), adalah pahlawan super fiktif dari Marvel Comics yang diciptakan oleh penulis Stan Lee dan artis Steve Ditko. Ia pertama muncul dalam Amazing Fantasy #15 (Agustus 1962). Ia telah menjadi salah satu pahlawan super yang paling terkenal di dunia..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="avatar.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Avatar</h5>
        <p class="card-text">Avatar, dikenal sebagai James Cameron's Avatar, adalah film fiksi ilmiah petualangan Amerika Serikat tahun 2009 yang disutradarai oleh James Cameron dan diproduseri oleh James Cameron dan Jon Landau. Naskah film ini ditulis oleh James Cameron. Film ini dibintangi oleh Sam Worthington, Zoe Saldaña, Stephen Lang, Michelle Rodriguez dan Sigourney Weaver.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="captain america.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Captain America</h5>
        <p class="card-text">Captain America: The Winter Soldier adalah film pahlawan super asal Amerika dari terbitan Marvel Comics dalam komik Captain America, yang diproduseri Marvel Studios dan didistribusikan oleh Walt Disney Studios Motion.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="the medium.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Medium</h5>
        <p class="card-text">Saat tim dokumenter mengikuti Nim seorang dukun di daerah Isan - Thailand Utara mereka bertemu dengan keponakannya bernama Mink yang menunjukkan gejala aneh. Nampaknya Mink akan mewarisi bakat dukun dari keturunan keluarga mereka</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="wakanda forever.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Wakanda Forever</h5>
        <p class="card-text">Rakyat Wakanda kali ini akan berjuang untuk melindungi negerinya dari campur tangan kekuatan dunia setelah kematian sang Raja T'Challa</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Anak titipan setan.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Anak Titipan Setan</h5>
        <p class="card-text">Anak Titipan Setan adalah film horor Indonesia tahun 2023 yang ditulis dan disutradarai oleh Erwin Arnada. Film yang ditayangkan di bioskop Indonesia pada 12 Januari 2023 ini dibintangi oleh Gisella Anastasia dan Ingrid Widjanarko</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="fantastik.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Fantastic Beasts</h5>
        <p class="card-text">Film ini merupakan film yang diadaptasikan dari novel karya J.K Rowling si penulis legendaris dari film Harry Potter. Film Box Office “ Fantastic Beasts and Where To Find Them” ini berceritakan tentang tujuh puluh tahun di mana sebelum Harry Potter membaca buku bpelajaran yang di tulis oleh Newt Scamander yang di perankan oleh Eddie Redmayne di Hogwarts, sang penulis berkelana mengunjungi perkumpulan rahasia penyihir di kota New York.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
