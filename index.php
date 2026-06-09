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
$dosen = mysqli_query($con, "SELECT * FROM dosen");

echo "<br>";
echo "<table style='border: 1px solid black'>";
echo "<tr><th>NIP</th><th>Nama Dosen</th><th>Alamat</th></tr>";
while ($data = mysqli_fetch_array($dosen)) {
  echo "<tr><td>" . $data['nip'] . "</td><td>" . $data['nama'] . "</td><td>" . $data['alamat'] . "</td></tr>";
}
echo "</table>";
?>