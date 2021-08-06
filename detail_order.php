
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

   
  </head>
  <body>
  


  






<?php
require_once 'koneksi.php';
require_once 'header.php';

if (!isset($_GET['id_order'])) {
  header('Location: laporan.php');
}

?>

<div class="container mt-5">
  <h4>Detail Order</h4>
  <br>
  
  <a href="laporan.php">
    <button class="btn btn-success btn-sm">
      <i class="fa fa-arrow-left"></i> Kembali
    </button>
  </a>

  <table class="table table-bordered mt-3">
    <thead align="center">
      <tr>
        <th>#</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Pembelian</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM `tb_detail_order` INNER JOIN tb_produk ON tb_detail_order.id_produk = tb_produk.id WHERE id_order = '$_GET[id_order]'");
    $no = 1;

    while($detail = $query->fetch_assoc()) :
    ?>

      <tr>
        <td align="center"><?= $no++; ?></td>
        <td><?= $detail['nama_produk']; ?></td>
        <td><?= $detail['harga']; ?></td>
        <td align="center"><?= $detail['pembelian']; ?></td>
      </tr>

    <?php endwhile; ?>

    </tbody>
  </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>











