<?php require('header.php'); ?>
<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="styles.css" rel="stylesheet" type="text/css" />
  <title>Data Barang</title>
</head>

<body>
  <div class="container">
    <a class="tambahBarang" href="tambah.php">Tambah Barang</a>
   <div class="data">
      <table>
        <tr>
          <th>Gambar</th>
          <th>Nama Barang</th>
          <th>Katagori</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
        <?php if ($result) : ?>
          <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr>
              <td><img style="width: 100px; height: 100px;" src="<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>"></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['kategori']; ?></td>
              <td><?= $row['harga_beli']; ?></td>
              <td><?= $row['harga_jual']; ?></td>
              <td><?= $row['stok']; ?></td>
              <td>
                <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $row['id_barang']; ?>">Hapus</a>
              </td>
            </tr>
          <?php endwhile;
        else : ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
        <?php endif; ?>
      </table>
    </div>
  </div>
</body>

</html>
<?php require('footer.php'); ?>