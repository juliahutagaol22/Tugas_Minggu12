<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Form Biodata</title>
	<style>

		fieldset { 
			padding: 9px; 
			margin-bottom:20px; 
			border: 1px solid #ddd; 
			width: 500px; 
		}

		form.hform { 
			margin-bottom: 10px; 
		}
		form.hform label { 
			float: left; 
			width: 180px; 
		}
		form.hform p {
			display: inline; 
			white-space: nowrap;
		}

		body{
			background-image: url("bg.JPG");
		}

		#daftar-box{
			position: relative;
			background-color: violet;
			padding: 10px;
			margin: 5% auto;
			height: 400px;
			width: 600px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.6);
		}
	</style>
</head>

<body>
<body>
	<div class="header" align="center">
		<h1>Formulir Data Diri</h1>
	</div>
	<div id="daftar-box">
		<table>
			<tr>
				<td>Nama Lengkap:</td>
				<td><?php echo $_POST['nama'];?></td>
			</tr>
			 <tr>
				<td>Tempat Lahir:</td>
				<td><?php echo $_POST['tempat'];?></td>
			</tr>
			<tr>
				<td>Tanggal lahir:</td>
				<td><?php echo $_POST['tanggal'];?></td>
			</tr>
			<tr>
				<td>Agama:</td>
				<td><?php echo $_POST['agama'];?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin:</td>
				<td><?php echo $_POST['jk'] ;?> </td>
			</tr>
			<tr>
				<td>Pekerjaan:</td>
				<td><?php echo $_POST['pekerjaan'] ;?></td>
			</tr>
			<tr>
				<td>Asal Perguruan Tinggi:</td>
				<td><?php echo $_POST['pt'] ;?></td>
			</tr>
			<tr>
				<td>Alamat Email:</td>
				<td><?php echo $_POST['email'];?></td>
			</tr>
			<tr>
				<td>No Telepon:</td>
				<td><?php echo $_POST['telephone'];?></td>
			</tr>
			<tr>
				<td>Sosial Media(Instagram):</td>
				<td><?php echo $_POST['sosmed'];?></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><?php echo $_POST['alamat'];?></td>
			</tr>
			
			<tr>
				<td>Foto:</td>
				<td><img src= " <?php echo $_POST['photo'];?>" alt ="" width="130px" height="130px"></td>
			</tr>
		</table>
	</fieldset>

</form>

</div>	
<br><br>
<footer>
	<p align="center">Copyright &copy;2021</p>
</footer>

	</body>
</html>