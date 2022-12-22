<?php require('header.php'); ?>

<div class="container">
    <h1>Data Barang</h1>
    <tr>
        <a href="tambah.php?id=" class="buttontambah">Tambah Barang</a> <br><br><br>
    </tr>
    <form action="" method="get">
        <label for="q">Cari Data </label>
        <input type="text" id="q" name="q" class="input-q" value="<?php echo $q ?>">
        <input type="submit" name="submit" value="Cari" class="buttoncari"> <br><br>
    </form>
    <div class="main">
        <table cellpadding="5" cellspacing="0">
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
                        $row['nama'];?>"></td>
                        <td><?= $row['nama'];?></td>
                        <td><?= $row['kategori'];?></td>
                        <td><?= $row['harga_beli'];?></td>
                        <td><?= $row['harga_jual'];?></td>
                        <td><?= $row['stok'];?></td>
                        <td>
                            <a class="button1" href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a>
                            <a class="button2" href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; else: ?>
                        <tr>
                            <td colspan="7">Belum Ada Data</td>
                        </tr>
                        <?php endif; ?>
        </table>
    </div>
</div>
<?php require('footer.php'); ?>