<html>

<head>
  <title>Belajar Web</title>
</head>

<body>
  <h1>Belajar dasar web</h1>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    echo "Hello World " . $i . " : ";
    echo "<input name='hello$i' type='text'/> : ";
    echo "<input name='date$i' type='date'/> : ";
    echo "<input name='color$i' type='color'/> : ";
    echo "<select name='select$i'>
    <option>Laki-laki</option>
    <option>Perempuan</option>
  </select><br>";
  }

  $con = mysqli_connect('localhost', 'root', '', 'teknologiinformasi');

  echo "<br>";
  echo "<form action='index.php' method='get'>
  Cari : <input type='text' name='cari'/><input type='submit' value='cari'/></form>";
  if (isset($_GET['cari'])) {
    $dosen = mysqli_query($con, "SELECT * FROM dosen WHERE nama LIKE '%" . $_GET['cari'] . "%' or alamat LIKE '%" . $_GET['cari'] . "%'");
    echo "<br>SELECT * FROM dosen WHERE nama LIKE '%" . $_GET['cari'] . "%' or alamat LIKE '%" . $_GET['cari'] . "%'";
  } else {
    $dosen = mysqli_query($con, "SELECT * FROM dosen");
  }

  echo "<table style='border: 1px solid black'>";
  echo "<tr><th>NIP</th><th>Nama Dosen</th><th>Alamat</th></tr>";
  while ($data = mysqli_fetch_array($dosen)) {
    echo "<tr><td>" . $data['nip'] . "</td><td>" . $data['nama'] . "</td><td>" . $data['alamat'] . "</td></tr>";
  }
  echo "</table>";
  ?>
</body>

</html>