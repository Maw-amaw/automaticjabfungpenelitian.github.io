<?php
    session_start();
    if(! isset($_SESSION['is_login']))
    {
    header('location:login.php');
    }

    include "../tambahan/css/cssboostrap.php";
    include "navbar/nav2.php";
?>

<a href="tambah_data.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Input</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>