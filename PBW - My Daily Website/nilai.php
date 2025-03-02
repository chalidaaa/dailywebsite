<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: ededed;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background-color: #1c3d51;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .content {
            padding: 20px;

        }
        input[type="text"],
        input[type="number"] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button{
            width: 25%;
            background-color: #1c3d51;
            color: rgb(255, 255, 255);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;    
        }

        button[type="submit"] {
            width: 25%;
            background-color: #1c3d51;
            color: rgb(255, 255, 255);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            opacity: 0.8;
        }

    </style>

    <div class="container">
        <div class="content">
            <form action="" method="post" style="margin-left:40px;">
                <h3>Prosentase (%) </h3>
                <label for="tugas">Tugas </label>
                <input type="text" id="tugas1" name="tugas1" value="20%"readonly>

                <label for="uts">UTS</label>
                <input type="text" id="uts1" name="uts1" value="30%"readonly>

                <label for="uas">UAS</label>
                <input type="text" id="uas1" name="uas1" value="50%"readonly><br><br><hr>

                <h3>Nilai </h3>
                <label for="tugas">Tugas </label>
                <input type="number" id="tugas2" name="tugas2" required>

                <label for="uts">UTS</label>
                <input type="number" id="uts2" name="uts2" required>

                <label for="uas">UAS</label>
                <input type="number" id="uas2" name="uas2" required><br><br><hr>

                <h3>Nilai Akhir</h3>
                <label for="uts">Angka</label>
                <input type="number" id="nilaiakhir" name="nilaiakhir" readonly>

                <label for="uas">Huruf</label>
                <input type="text" id="rangehuruf" name="rangehuruf" readonly><br><br><br>

                <button type="button" onclick="hitungNilai()">Hitung</button>
                <button type="submit" style="margin-left:20px";>Kirim</button><br><br>
            </form>
        </div>
    </div>

        <script>
            function hitungNilai() {
                        var persentaseTugas = parseInt(document.getElementById('tugas1').value);
                        var persentaseUTS = parseInt(document.getElementById('uts1').value);
                        var persentaseUAS = parseInt(document.getElementById('uas1').value);

                        var nilaiTugas = parseInt(document.getElementById('tugas2').value);
                        var nilaiUTS = parseInt(document.getElementById('uts2').value);
                        var nilaiUAS = parseInt(document.getElementById('uas2').value);

                        var nilaiAkhir = (persentaseTugas * nilaiTugas + persentaseUTS * nilaiUTS + persentaseUAS * nilaiUAS) / 100;

                        document.getElementById('nilaiakhir').value = nilaiAkhir.toFixed(2);

                        // Range nilai huruf
                        var rangeHuruf = '';
                        if (nilaiAkhir >= 85) {
                            rangeHuruf = 'A';
                        } else if (nilaiAkhir >= 80) {
                            rangeHuruf = 'AB';
                        } else if (nilaiAkhir >= 70) {
                            rangeHuruf = 'B';
                        } else if (nilaiAkhir >= 65) {
                            rangeHuruf = 'BC';
                        } else if (nilaiAkhir >= 60) {
                            rangeHuruf = 'C';
                        } else if (nilaiAkhir >= 50) {
                            rangeHuruf = 'D';
                        } else {
                            rangeHuruf = 'E';
                        }

                        document.getElementById('rangehuruf').value = rangeHuruf;
                    }
        </script>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilaiAkhir = $_POST["nilaiakhir"];
            $rangeHuruf = $_POST["rangehuruf"];
            ?>
            <!-- ISI BORDER -->
            <div id="isi border" style="width: 70%;margin:20px auto;">
            <h2>Hasil Nilai</h2>
                <table border=1 rowspan=0 colspan=0 width=80%>
                    <tr>
                        <td style="font-weight: bold; background-color: yellow;">Prosentase (%)</td>
                        <td style="font-weight: bold; background-color: yellow;"></td>
                        <td style="font-weight: bold; background-color: yellow;"></td>
                    </tr>    
                    <tr>
                        <td>Tugas</td>
                        <td>:</td>
                        <td><?php echo $_POST['tugas1'] ?><br></td>
                    </tr>
                    <tr>
                        <td>UTS</td>
                        <td>:</td>
                        <td><?php echo $_POST['uts1'] ?><br></td>
                    </tr>
                    <tr>
                        <td>UAS</td>
                        <td>:</td>
                        <td><?php echo $_POST['uas1'] ?><br></td>
                        
                    </tr>
                        <td style="font-weight: bold; background-color: yellow;">Nilai </td>
                        <td style="font-weight: bold; background-color: yellow;"></td>
                        <td style="font-weight: bold; background-color: yellow;"></td>
                    </tr>
                    <tr>
                        <td>Tugas</td>
                        <td>:</td>
                        <td><?php echo $_POST['tugas2'] ?><br></td>
                    </tr>
                    <tr>
                        <td>UTS</td>
                        <td>:</td>
                        <td><?php echo $_POST['uts2'] ?><br></td>
                    </tr>
                    <tr>
                        <td>UAS</td>
                        <td>:</td>
                        <td><?php echo $_POST['uas2'] ?><br></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color: red;">Akhir</td>
                        <td style="font-weight: bold; background-color: red;">:</td>
                        <td style="font-weight: bold; background-color: red;"><?php echo $nilaiAkhir . ' (' . $rangeHuruf . ')' ?></td>
                     </tr>
                </table>
            </div>
            
        <?php
        }
        ?>
            