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
    <div class="container">
         <h1>INPUT PRODUK</h1>
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Seri</td>
                    <td><input type="text" name="seri" class="form-control"></td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td>
                        <select name="merk" class="form-select">
                            <option value="">Pilih Merk</option>
                        <?php
                                $query = "SELECT * FROM tb_merk"; // menampilkan semua field dari semua data yang ada di tabel tb_merk

                                $result = mysqli_query($koneksi, $query); // mengeksekusi query yang ada di variabel query diatas
                                
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama_merk'] ?></option>

                        <?php
                                    }
                                }
                        ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="kategori" class="form-select">
                            <option value="">Pilih Kategori</option>
                        <?php
                            $query2 = "SELECT * FROM tb_kategori"; // menampilkan semua field dari semua data yang ada di tabel tb_merk
                            $result2 = mysqli_query($koneksi, $query2); // mengeksekusi query yang ada di variabel query diatas

                            if(mysqli_num_rows($result2) > 0){
                                while($rows2 = mysqli_fetch_assoc($result2)){
                        ?>
                            <option value="<?= $rows2['id'] ?>"><?= $rows2['nama_kategori'] ?></option>
                        <?php
                            }
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" class="form-control"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" class="form-control"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><textarea name="deskripsi" class="form-control" rows="3" cols="17"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnSubmit" value="Simpan" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>