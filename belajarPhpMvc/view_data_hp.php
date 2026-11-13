<?php
    require_once "./config/config.php";
    require_once "./config/proses.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <table border=1 class=table>
    <tr>
        <td>
            No
        </td>
        <td>
            Nama
        </td>
        <td>
            Kategori
        </td>
        <td>
            Merk
        </td>
    </tr>
    <?php
        $query = "SELECT tb_produk.nama_produk as nama, tb_kategori.nama_kategori as kategori,
        tb_merk.nama_merk as merk from tb_produk
        LEFT JOIN tb_kategori ON tb_produk.id_kategori = tb_kategori.id
        LEFT JOIN tb_merk ON tb_produk.id_merk = tb_merk.id";

        $result = mysqli_query($koneksi, $query);
        if(mysqli_num_rows($result) > 0) {
            $no = 1;
                while($rows = mysqli_fetch_assoc($result)){
                    
    ?>
    <tr>
        <td>
           <?=  $no++ ?>
        </td>
        <td>
            <?=  $rows['nama'] ?>
        </td>
        <td>
           <?=  $rows['kategori'] ?>
        </td>
        <td>
            <?=  $rows['merk'] ?>
        </td>
    </tr>
    <?php
                }
        }
    ?>
  </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>