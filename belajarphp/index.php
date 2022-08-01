<html>
      <head>
        <title>PHP Test</title>
      </head>
      <body>
     <!-- penanganan form dengan method POST -->
    <form method="post" action="index.php">
        <label>Nama Siswa</label><br/>
        <input type="text" name="nama"><br/><br/>
        <label>Jenis Kelamin</label><br/>
        <select name="kelamin">
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
		<br/><br/>
        <label>Asal Sekolah</label><br/>
        <input type="text" name="asal"><br/><br/>
        <label>No.Telpon </label><br/>
        <input type="text" name="telpon"><br/><br/>
        <label>Usia</label><br/>
        <select name="usia">
        <option value="pilih">pilih</option>
    <option value="15">15</option>
  <option value="16">16</option>  
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
</select><br/>
    <br/>
        <input type="submit" value="oke">
        <br/><br/>
		<form action="index.php" method="get">
        <?php 
// menangkap data nama dengan method post
@$nama = $_POST['nama'];
// menangkap data usia dengan method post
@$usia = $_POST['usia'];

@$asal = $_POST['asal'];

@$kelamin = $_POST['kelamin'];

@$telpon = $_POST['telpon'];

// menampilkan data nama
echo "Selamat $nama Pendaftaran Berhasil!!";
echo "<br>";
echo "Biodata Anda";
echo "<hr>";
echo "Nama: " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia: " . $usia;
echo "<br/>";
echo "Asal sekolah: " . $asal;
echo "<br/>";
echo "Jenis kelamin: " . $kelamin;
echo "<br/>";
echo "No.Telpon: " . $telpon;
echo "<hr>";
echo "<br><br>";


?>

        </form>

      </body>
    </html>