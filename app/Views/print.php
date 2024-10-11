<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<table>
		<tr>
			    <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Harga Awal</th>
                <th>Deskripsi Barang</th>
		</tr>

		 <?php 

            $no=1;
            foreach($manda as $erwin){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $erwin->nama_barang?></td>
                <td><?= $erwin->tgl?></td>
                <td><?= $erwin->harga_awal?></td>
                <td><?= $erwin->deskripsi_barang?></td>
            </tr>

        <?php endforeach; ?>
	</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>