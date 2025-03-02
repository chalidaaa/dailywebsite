<!-- Icon -->
<link href="img/kyut.png" rel="icon">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Chalida's Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    .topnav {
        display: flex;
        justify-content: center; 
        align-items: center;
        margin: 0 auto; 
    }

    a {
        text-decoration: none;
        color: white;
        background-color: #193d54;
        padding: 10px 20px;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        background-color: white;
        color: #193d54;
    }
</style>



</head>
<body>
    <!-- HEADER -->
    <body style="font-family: Arial, sans-serif;line-height: 1.6; margin: 0;">
    <header style=" background-color: #193d54; padding: 1em; text-align: center; color: #fff;">
        <div class="header" >
            <h1>Blog Chalida</h1>
        </div>
    
	
        <div class="topnav">
            <p>
                <a href="index.php">Beranda</a>
                <a href="index.php?page=profile">Profile</a>
                <a href="index.php?page=artikel">Artikel</a>
                <a href="index.php?page=buku_tamu">Buku Tamu</a>
                <a href="index.php?page=nilai">Form Nilai</a>
                <a href="aplikasi.php">Aplikasi</a>
            </p>
        </div>
    </header><br>

    <?php
    if (isset($_GET['page'])) {
      include($_GET['page'] . ".php");
    } else { 
    ?>
        <div class="row">
            <div class="column">
            <p align="center">
            <img src="img/chal.JPG" width="20%" height="50%">
            <br>
        </p>
    
        <!-- ISI -->
        <div id="kalimat" style=" text-align: justify; text-indent: 25px; width: 90%; margin:20px auto;">
            <p>Halo! Nama saya Chalida Abdat. Saya mahasiswi Program Studi Teknik Informatika, Fakultas Ilmu Komputer, Universitas Dian Nuswantoro. Dengan nomor NIM A11.2023.15031.
                Saya lulusan SMK Negeri 2 Semarang pada tahun 2023 yang terjun di jurusan Rekayasa Perangkat Lunak.
                Hal inilah yang menjadi dasar pondasi mengapa saya memilih Universitas Dian Nuswantoro untuk menjadi tempat saya melanjutkan studi lanjut.
                Saya harap dengan bergabungnya saya menjadi mahasiwi di Universitas Dian Nuswantoro, saya bisa menjalin relasi yang sangat amat baik dengan orang di sekitar.
                Saya juga berharap agar semoga saya selalu senantiasa agar diberikan akal yang cemerlang agar bisa menjadi siswa unggulan dan mendapatkan beasiswa!
            </p>

            <p>Sekarang, saya menulis blog ini di Bengkel Koding bersama teman-teman saya diantaranya Johana, Amirul dan Brenenda. 
                Johana sedang mengerjakan tugas kalkulus, sedangkan Amirul dan Brenenda sedang main Mobile Legend.
                Saya amat sangat bersyukur memiliki teman teman kelas saya. Mereka asik dan tidak kaku. Termasuk teman kelompokan program PKM kemarin.
                Diantaranya yaitu Fikri, Habibi, Johana, Megan, Arka, Danendra, Reno, Ayu, dan Farhan. Semoga kalo udah semester 3 kita masih berteman seperti ini ya!
                Terima kasih teman teman sudah sudi menjadi temanku HEHEHEH
            </p>

            <p>Saya bingung mau nulis apa lagi, tapi yaudah deh ini sedikit funfact tentang saya. Dulunya dokter kandungan mama saya berasumsi bahwa saya merupakan anak laki laki.
                Saya udah mau dinamain "Khalid" tuh pada saat itu, eh pas brojol kok yang keluar cewek?? Yaudah deh Abi saya ngide untuk ngasi nama saya yang awalnya
                "Khalid" jadi "Chalida". K nya diganti C biar cantik katanya, dan ada penambahan huruf a di akhir nama saya. 
                Oh iya, sayang sekali Abi saya telah meninggal dunia pada saat saya kelas 3 SD. 
                Kangen deh rasanya, dulu jarang banget ketemu sama Abi karena beliau dulunya jarang banget di rumah, kalo ngga proyek di luar kota ya di luar negeri. Segitu dulu deh sedikit funfact tentang diriku, sampai jumpa nanti!
            </p>
        </div>
    <?php
    }
    ?>
        
    <br>
    <!-- FOOTER -->
    <footer style="font-family: Arial, sans-serif;line-height: 1.6; margin: 0; background-color: #193d54; padding: 1em; text-align: center; color: #fff;">
        <center>
        Made by Chalida Abdat<br>
        A11.2023.15031 (Class of 4104)
        </center>
</body>
</html>