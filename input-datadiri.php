<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex.12003456"/><br><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex.Kharisya"/><br><br>

    <label for="tanggal_lahir">Tanggal Lahir :</p>
    <input type="date" name="tanggal_lahir"/><br><br>

    <label for="nilai">Nilai</label>
    <input type="number" name="nilai" placeholder="Ex.99.99" /><br><br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    
</form>    

<?php
    include('./input-config.php');
    echo "<hr>";

    //Menampilkan data diri dari database
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM datadiri ");
    while($row = mysqli_fetch_array($data)){
        $tabledata .= "
            <tr>
                <td>".$no."</td>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
    ";
?>