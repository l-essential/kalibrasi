

<div class="container">
	<h1>Data <strong>Mahasiswa</strong></h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>PRODI</th>
			</tr>
		</thead>
		<tbody>
			<!--Fetch data dari database-->
            <?php foreach ($data->result() as $row) :?>
                <tr>
                    <td><?php echo $row->nim; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->prodi; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
    <div class="row">
    	<div class="col">
    		<!--Tampilkan pagination-->
    		<?php echo $pagination; ?>
    	</div>
    </div>
     

</div>
