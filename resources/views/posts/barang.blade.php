<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Id Supplier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $brg) :?>
                    <tr>
                        <td><?= $brg['id_barang'];?></td>
                        <td><?= $brg['nama_barang'];?></td>
                        <td><?= $brg['harga'];?></td>
                        <td><?= $brg['stok'];?></td>
                        <td><?= $brg['id_supplier'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
</body>
</html>