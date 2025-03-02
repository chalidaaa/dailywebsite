<!-- Icon -->
<link href="img/calculator.png" rel="icon">
<title>Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/jung.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: #ededed;
            padding: 50px;
            border-radius: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="number"] {
            margin-bottom: 10px;
        }

        #result {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .topnav {
            display: flex;
            justify-content: center; /* Center the items horizontally */
            align-items: center;
            margin: 0 auto; /* Center the entire nav horizontally */
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #193d54;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #9ecce8;
            color: black;
        }
</style>

    </style>

    <script type="text/javascript">
        function hitung(tipe) {
            event.preventDefault();
            var a = document.forms["Kalkulator"]["nilaiA"].value;
            var b = document.forms["Kalkulator"]["nilaiB"].value;
            var c = 0;
            if (tipe == "tambah") {
                c = Number(a) + Number(b);
            } else if (tipe == "kurang") {
                c = Number(a) - Number(b);
            } else if (tipe == "kali") {
                c = Number(a) * Number(b);
            } else if (tipe == "bagi") {
                c = Number(a) / Number(b);
            }

            document.getElementById("hasil").innerHTML = 'Hasil : ' + c;
        }
    </script>


    <div class="row">
        <div style="background-color: ;">
            <form name="Kalkulator">
                <center>
                <h2>Aplikasi Kalkulator</h2></center>
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

                <div>
                    <hr><br>
                </div>

                Input 1 : <input type="text" name="nilaiA" id="nilaiA"><br>
                Input 2 : <input type="text" name="nilaiB" id="nilaiB"><br>
                
                <div>
                    <center> 
                        <input type="button" value="+" onclick="hitung('tambah')">
                        <input type="button" value="-" onclick="hitung('kurang')">
                        <input type="button" value="x" onclick="hitung('kali')">
                        <input type="button" value=":" onclick="hitung('bagi')">
                        <hr><br></div>
                    </center>
                <span id="hasil"></span>
            </form>
        </div>
    </div>