<h1>Edit Data</h1>

<?php

// koneksi ke mysql

mysql_connect("localhost", "root", "rahasiappob");
mysql_select_db("data");

// membaca data id data yang akan diedit (bisa juga menggunakan POST)
$id = $_GET['id'];

// membaca data dalam database sesuai id datanya
$query = "SELECT * FROM pendataan WHERE id = $id";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

?>

<form method="post" action="update.php">
<table>
  <tr><td>Nama Anda</td><td>:</td><td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td></tr>
  <tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"><?php echo $data['alamat'];?></textarea></td></tr>
  <tr><td>Jenis Kelamin</td><td>:</td><td>

  <?php
  // proses pengecekan jenis kelamin
  // jika jenis kelamin dalam databasenya 'L', maka label 'checked' diberikan pada radiobutton yang laki-laki
  // demikian pula jika 'P' (perempuan)

  if ($data['sex'] == "L") echo "<input type='radio' name='sex' value='L' checked>Laki-laki <input type='radio' name='sex' value='P'>Perempuan";
  else if ($data['sex'] == "P") echo "<input type='radio' name='sex' value='L'>Laki-laki <input type='radio' name='sex' value='P' checked>Perempuan";
  ?>

   </td></tr>
  <tr>
       <td>Pilih Pekerjaan</td>
       <td>:</td>
       <td>
       <select name="pekerjaan">

           <?php
           // proses menampilkan pilihan jenis pekerjaan.
           // jika pekerjaan = petani, maka pada option 'petani' diberi label 'selected', demikian seterusnya

           if ($data['pekerjaan'] == "Petani") echo "<option value='Petani' selected>Petani</option>";
           else echo "<option value='Petani'>Petani</option>";

           if ($data['pekerjaan'] == "Guru") echo "<option value='Guru' selected>Guru</option>";
           else echo "<option value='Guru'>Guru</option>";

           if ($data['pekerjaan'] == "Dokter") echo "<option value='Dokter' selected>Dokter</option>";
           else echo "<option value='Dokter'>Dokter</option>";

           if ($data['pekerjaan'] == "Lain-lain") echo "<option value='Lain-lain' selected>Lain-lain</option>";
           else echo "<option value='Petani'>Lain-lain</option>";
           ?>

       </select>
       </td>
  </tr>
  <tr><td>Status Menikah</td><td>:</td><td>

      <?php
      // proses untuk menampilkan pilihan status nikah
      // jika status nikahnya sudah menikah (bernilai 1), maka label 'checked' diberikan ke checkbox nya
      // sedangkan jika tidak, maka label 'checked' tidak dituliskan

      if ($data['statusNikah'] == 1) echo "<input type='checkbox' name='statusNikah' value='1' checked> Ya";
      else echo "<input type='checkbox' name='statusNikah' value='1'> Ya";

      ?>
</td>
  </tr>
</table>
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
</form>