<table>
  <tr>
    <td>No</td>
    <td>Nim</td>
    <td>Nama</td>
    <td>Semester</td>
    <td>Prodi</td>
    <td>Fakultas</td>
  </tr>
<?php   
  // koneksi databse
  include "koneksi.php";

  $no = 1;
  $data = mysqli_query($koneksi, "select * from kontak");
  while ($d = mysqli_fetch_array($data)) {
    ?> 
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d["Nim"]; ?></td>
      <td><?php echo $d["Nama"]; ?></td>
      <td><?php echo $d["Semester"]; ?></td>
      <td><?php echo $d["Prodi"]; ?></td>
      <td><?php echo $d["Fakultas"]; ?></td>
    </tr>
    <?php
  }
  ?>
  </table>