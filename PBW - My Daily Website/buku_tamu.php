<div style="margin-left:40px;">
    <div id="isi" style="margin: 20px 40px; width:80%">
            <form action="" method="post"> 
                Nama Lengkap:<br>
                    <input type="text" name="Nama_Lengkap" size="55"><br><br>

                Jenis Kelamin:<br>
                <input type="radio" name="Jenis_Kelamin" value="L"> Laki-laki<br>
                <input type="radio" name="Jenis_Kelamin" value="P"> Perempuan<br><br>

                Alamat Tinggal:<br>
                    <input type="text" name="Alamat_Tinggal" size="55"><br><br>

                Email:<br>
                    <input type="text" name="Alamat_Email" size="55"><br><br>
                
                Mengetahui web ini dari: <br>
                <select name="info">
                    <option selected="select">Pilihan
                    </option>
                    <option value="web udinus">Web udinus
                    </option>
                    <option value="surat kabar">Surat kabar
                    </option>
                    <option value="Browsing">Browsing
                    </option>
                    <option value="teman">Teman
                    </option>
                </select><br><br>
                Pesan :<br>
                <textarea name="pesan" cols="55" rows="5"></textarea>
                <br><br>
                <button type="submit" >Kirim</button>
                <button type="reset">Batal</button>
            </form><br><br>

        <?php
        if ($_POST) {
        ?>
        <table border="1" cellpadding="5">
            <tr>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Tinggal</th>
            <th>Alamat Email</th>
            <th>Mengetahui Web dari</th>
            <th>Pesan</th>
            </tr>
            <tr>
            <td><?php echo $_POST['Nama_Lengkap'] ?></td>
            <td><?php echo $_POST['Jenis_Kelamin'] ?></td>
            <td><?php echo $_POST['Alamat_Tinggal'] ?></td>
            <td><?php echo $_POST['Alamat_Email'] ?></td>
            <td><?php echo $_POST['info'] ?></td>
            <td><?php echo $_POST['pesan'] ?></td>
            </tr>
        </table>
        <?php
        }
        ?>
    </div>
</div>
       