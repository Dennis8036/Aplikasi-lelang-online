<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>


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
                <td><?php echo $no++ ?></td>
                <td><?php echo $erwin->nama_barang ?></td>
                <td><?php echo $erwin->tgl ?></td>
                <td><?php echo $erwin->harga_awal ?></td>
                <td><?php echo $erwin->deskripsi_barang ?></td>
            </tr>

        <?php endforeach; ?>
	</table>

</body></html>