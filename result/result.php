<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../sidebar.css" type="text/css">
	<title>Decision Support System</title>
</head>
<style>
	body {
		margin-top: 55px;
	}
</style>

<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">DSS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link" href="../form/formalternatif.php">Form</a>
						<a class="nav-link" href="../view/dtalternatif.php">View</a>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Result</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="result.php?metode=saw">Metode SAW</a></li>
								<li><a class="dropdown-item" href="result.php?metode=wp">Metode WP</a></li>
								<li><a class="dropdown-item" href="result.php?metode=topsis">Metode TOPSIS</a></li>
								<li><a class="dropdown-item" href="result.php?metode=multimoora">Metode MULTIMOORA</a></li>
							</ul>
						</li>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<?php
	$url = $_GET['metode'];
	if ($url == 'saw') { ?>
		<div class="d-flex" id="wrapper">
			<ul id="sidebar-wrapper">
				<div class="sidebar-nav">
					<li>
						<a href="#putusan">- Matrix Keputusan</a>
					</li>
					<li>
						<a href="#normal">- Normalisasi</a>
					</li>
					<li>
						<a href="#pra">- Pra-ranking</a>
					</li>
					<li>
						<a href="#rank">- Ranking</a>
					</li>
				</div>
			</ul>
			<div class="container">
				<div class="row mt-3 justify-content-center">
					<div class="col-md-9">
						<?php
						include('../config.php');

						$sql = "SELECT * FROM v_matrix_keputusan";
						$sql1 = "SELECT * FROM normalisasi";
						$sql2 = "SELECT * FROM v_prarangking";
						$sql3 = "SELECT * FROM rangking";

						$results = $config->query($sql);
						$results1 = $config->query($sql1);
						$results2 = $config->query($sql2);
						$results3 = $config->query($sql3);
						?>
						<table class="table table-light table-striped">
							<h1 id="putusan">Tabel vmatrixkeputusan</h1>
							<thead>
								<tr>
									<th scope="col">id matrix</th>
									<th scope="col">id alternaitf</th>
									<th scope="col">nama alternaitf</th>
									<th scope="col">id kriteria</th>
									<th scope="col">nama kriteria</th>
									<th scope="col">id bobot</th>
									<th scope="col">value</th>
									<th scope="col">nilai</th>
									<th scope="col">keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($results as $row) : ?>
									<tr>
										<th scope="row"><?= $row['id_matrix']; ?></td>
										<td><?= $row['Id_alternatif']; ?></td>
										<td><?= $row['nama_alternatif']; ?></td>
										<td><?= $row['id_kriteria']; ?></td>
										<td><?= $row['nama_kriteria']; ?></td>
										<td><?= $row['id_bobot']; ?></td>
										<td><?= $row['nilai']; ?></td>
										<td><?= $row['hasil']; ?></td>
										<td><?= $row['keterangan']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<br><br>
						<table class="table table-light table-striped">
							<h1 id="normal">Tabel vnormalisasi</h1>
							<thead>
								<tr>
									<th scope="col">id matrix</th>
									<th scope="col">id alternaitf</th>
									<th scope="col">nama alternaitf</th>
									<th scope="col">id kriteria</th>
									<th scope="col">nama kriteria</th>
									<th scope="col">id bobot</th>
									<th scope="col">value</th>
									<th scope="col">nilai</th>
									<th scope="col">keterangan</th>
									<th scope="col">Normalisasi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($results1 as $row) : ?>
									<tr>
										<th scope="row"><?= $row['id_matrix']; ?></td>
										<td><?= $row['Id_alternatif']; ?></td>
										<td><?= $row['nama_alternatif']; ?></td>
										<td><?= $row['id_kriteria']; ?></td>
										<td><?= $row['nama_kriteria']; ?></td>
										<td><?= $row['id_bobot']; ?></td>
										<td><?= $row['nilai']; ?></td>
										<td><?= $row['hasil']; ?></td>
										<td><?= $row['keterangan']; ?></td>
										<td><?= $row['normalisasi']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<br><br>
						<table class="table table-light table-striped">
							<h1 id="pra">Tabel vpraranking</h1>
							<thead>
								<tr>
									<th scope="col">id matrix</th>
									<th scope="col">id alternaitf</th>
									<th scope="col">nama alternaitf</th>
									<th scope="col">id kriteria</th>
									<th scope="col">nama kriteria</th>
									<th scope="col">id bobot</th>
									<th scope="col">value</th>
									<th scope="col">nilai</th>
									<th scope="col">keterangan</th>
									<th scope="col">Normalisasi</th>
									<th scope="col">Praranking</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($results2 as $row) : ?>
									<tr>
										<th scope="row"><?= $row['id_matrix']; ?></td>
										<td><?= $row['Id_alternatif']; ?></td>
										<td><?= $row['nama_alternatif']; ?></td>
										<td><?= $row['id_kriteria']; ?></td>
										<td><?= $row['nama_kriteria']; ?></td>
										<td><?= $row['id_bobot']; ?></td>
										<td><?= $row['nilai']; ?></td>
										<td><?= $row['hasil']; ?></td>
										<td><?= $row['keterangan']; ?></td>
										<td><?= $row['normalisasi']; ?></td>
										<td><?= $row['prarangking']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<br><br>
						<table class="table table-light table-striped">
							<h1 id="rank">Tabel vranking</h1>
							<thead>
								<tr>
									<th scope="col">id alternatif</th>
									<th scope="col">nama alternaitf</th>
									<th scope="col">Ranking</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($results3 as $row) : ?>
									<tr>
										<th scope="row"><?= $row['id_alternatif']; ?></td>
										<td><?= $row['nama_alternatif']; ?></td>
										<td><?= $row['rangking']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php } else if ($url == 'wp') { ?>
			<div class="d-flex" id="wrapper">
				<ul id="sidebar-wrapper">
					<div class="sidebar-nav">
						<li>
							<a href="#jumlah_bobot">- Jumlah Bobot</a>
						</li>
						<li>
							<a href="#nilai_s">- Nilai-S</a>
						</li>
						<li>
							<a href="#jum_nilai_s">- Jumlah Nilai-S</a>
						</li>
						<li>
							<a href="#nilai_v">- Nilai-V</a>
						</li>
						<li>
							<a href="#terbobot">- Normalisasi Terbobot</a>
						</li>
						<li>
							<a href="#pangkat">- Pangkat</a>
						</li>
					</div>
				</ul>
				<div class="container">
					<div class="row mt-3 justify-content-center">
						<div class="col-md-9">
							<?php
							include('../config.php');

							$sql = "SELECT * FROM wp_jumlahbobot";
							$sql1 = "SELECT * FROM wp_nilai_s";
							$sql2 = "SELECT * FROM wp_sums";
							$sql3 = "SELECT * FROM wp_nilai_v";
							$sql4 = "SELECT * FROM wp_normalisasiterbobot";
							$sql5 = "SELECT * FROM wp_pangkat";

							$results = $config->query($sql);
							$results1 = $config->query($sql1);
							$results2 = $config->query($sql2);
							$results3 = $config->query($sql3);
							$results4 = $config->query($sql4);
							$results5 = $config->query($sql5);
							?>
							<table class="table table-light table-striped">
								<h1 id="jumlah_bobot">Tabel Jumlah Bobot</h1>
								<thead>
									<tr>
										<th scope="col">Jumlah</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results as $row) : ?>
										<tr>
											<th scope="row"><?= $row['jumlah']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<br><br>
							<table class="table table-light table-striped">
								<h1 id="nilai_s">Tabel Nilai-S</h1>
								<thead>
									<tr>
										<th scope="col">Id Alternatif</th>
										<th scope="col">Nama Alternaitf</th>
										<th scope="col">Nilai-S</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results1 as $row) : ?>
										<tr>
											<th scope="row"><?= $row['Id_alternatif']; ?></td>
											<td><?= $row['nama_alternatif']; ?></td>
											<td><?= $row['nilai_s']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<br><br>
							<table class="table table-light table-striped">
								<h1 id="jum_nilai_s">Jumlah Nilai-S</h1>
								<thead>
									<tr>
										<th scope="col">Jumlah</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results2 as $row) : ?>
										<tr>
											<th scope="row"><?= $row['jum']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<br><br>
							<table class="table table-light table-striped">
								<h1 id="nilai_v">Tabel Nilai-V</h1>
								<thead>
									<tr>
										<th scope="col">Id Alternaitf</th>
										<th scope="col">Nama Alternaitf</th>
										<th scope="col">Nilai-V</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results3 as $row) : ?>
										<tr>
											<th scope="row"><?= $row['Id_alternatif']; ?></td>
											<td><?= $row['nama_alternatif']; ?></td>
											<td><?= $row['nilai_v']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<br><br>
							<table class="table table-light table-striped">
								<h1 id="terbobot">Tabel Normalisasi Terbobot</h1>
								<thead>
									<tr>
										<th scope="col">Id Bobot</th>
										<th scope="col">Id Kriteria</th>
										<th scope="col">Nilai</th>
										<th scope="col">Jumlah</th>
										<th scope="col">Normalisasi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results4 as $row) : ?>
										<tr>
											<th scope="row"><?= $row['id_bobot']; ?></td>
											<td><?= $row['id_kriteria']; ?></td>
											<td><?= $row['nilai']; ?></td>
											<td><?= $row['jumlah']; ?></td>
											<td><?= $row['normalisasi']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<br><br>
							<table class="table table-light table-striped">
								<h1 id="pangkat">Tabel Normalisasi Terbobot</h1>
								<thead>
									<tr>
										<th scope="col">id matrix</th>
										<th scope="col">id alternaitf</th>
										<th scope="col">nama alternaitf</th>
										<th scope="col">id kriteria</th>
										<th scope="col">nama kriteria</th>
										<th scope="col">id bobot</th>
										<th scope="col">value</th>
										<th scope="col">nilai</th>
										<th scope="col">keterangan</th>
										<th scope="col">normalisasi</th>
										<th scope="col">pangkat</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($results5 as $row) : ?>
										<tr>
											<th scope="row"><?= $row['id_matrix']; ?></td>
											<td><?= $row['Id_alternatif']; ?></td>
											<td><?= $row['nama_alternatif']; ?></td>
											<td><?= $row['id_kriteria']; ?></td>
											<td><?= $row['nama_kriteria']; ?></td>
											<td><?= $row['id_bobot']; ?></td>
											<td><?= $row['nilai']; ?></td>
											<td><?= $row['hasil']; ?></td>
											<td><?= $row['keterangan']; ?></td>
											<td><?= $row['normalisasi']; ?></td>
											<td><?= $row['pangkat']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php } else if ($url == 'topsis') { ?>
				<div class="d-flex" id="wrapper">
					<ul id="sidebar-wrapper">
						<div class="sidebar-nav">
							<li>
								<a href="#topsis_maxmin">- Topsis Maxmin</a>
							</li>
							<li>
								<a href="#topsis_nilaiv">- Topsis Nilai-V</a>
							</li>
							<li>
								<a href="#topsis_normalisasi">- Topsis Normalisasi</a>
							</li>
							<li>
								<a href="#topsis_pembagi">- Topsis Pembagi</a>
							</li>
							<li>
								<a href="#topsis_sipsin">- Topsis Sipsin</a>
							</li>
							<li>
								<a href="#topsis_terbobot">- Topsis Terbobot</a>
							</li>
						</div>
					</ul>
					<div class="container">
						<div class="row mt-3 justify-content-center">
							<div class="col-md-9">
								<?php
								include('../config.php');

								$sql = "SELECT * FROM topsis_maxmin";
								$sql1 = "SELECT * FROM topsis_nilaiv";
								$sql2 = "SELECT * FROM topsis_normalisasi";
								$sql3 = "SELECT * FROM topsis_pembagi";
								$sql4 = "SELECT * FROM topsis_sipsin";
								$sql5 = "SELECT * FROM topsis_terbobot";

								$results = $config->query($sql);
								$results1 = $config->query($sql1);
								$results2 = $config->query($sql2);
								$results3 = $config->query($sql3);
								$results4 = $config->query($sql4);
								$results5 = $config->query($sql5);
								?>
								<table class="table table-light table-striped">
									<h1 id="topsis_maxmin">Tabel Topsis Maxmin</h1>
									<thead>
										<tr>
											<th scope="col">Id Matrix</th>
											<th scope="col">Id Kriteria</th>
											<th scope="col">Nama Kriteria</th>
											<th scope="col">Maximum</th>
											<th scope="col">Minimum</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results as $row) : ?>
											<tr>
												<th scope="row"><?= $row['id_matrix']; ?></td>
												<td><?= $row['id_kriteria']; ?></td>
												<td><?= $row['nama_kriteria']; ?></td>
												<td><?= $row['maximum']; ?></td>
												<td><?= $row['minimum']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>
								<table class="table table-light table-striped">
									<h1 id="topsis_nilaiv">Tabel Topsis Nilai-V</h1>
									<thead>
										<tr>
											<th scope="col">Id Alternatif</th>
											<th scope="col">D-Plus</th>
											<th scope="col">D-Min</th>
											<th scope="col">Nilai-V</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results1 as $row) : ?>
											<tr>
												<th scope="row"><?= $row['Id_alternatif']; ?></td>
												<td><?= $row['dplus']; ?></td>
												<td><?= $row['dmin']; ?></td>
												<td><?= $row['nilaiv']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>
								<table class="table table-light table-striped">
									<h1 id="topsis_normalisasi">Tabel Topsis Normalisasi</h1>
									<thead>
										<tr>
											<th scope="col">Id Matrix</th>
											<th scope="col">Id Alternatif</th>
											<th scope="col">Nama ALternatif</th>
											<th scope="col">Id Kriteria</th>
											<th scope="col">Nama Kriteria</th>
											<th scope="col">Id Bobot</th>
											<th scope="col">Nilai</th>
											<th scope="col">Hasil</th>
											<th scope="col">Keterangan</th>
											<th scope="col">Normalisasi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results2 as $row) : ?>
											<tr>
												<th scope="row"><?= $row['id_matrix']; ?></td>
												<td><?= $row['Id_alternatif']; ?></td>
												<td><?= $row['nama_alternatif']; ?></td>
												<td><?= $row['id_kriteria']; ?></td>
												<td><?= $row['nama_kriteria']; ?></td>
												<td><?= $row['id_bobot']; ?></td>
												<td><?= $row['nilai']; ?></td>
												<td><?= $row['hasil']; ?></td>
												<td><?= $row['keterangan']; ?></td>
												<td><?= $row['normalisasi']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>
								<table class="table table-light table-striped">
									<h1 id="topsis_pembagi">Tabel Topsis Pembagi</h1>
									<thead>
										<tr>
											<th scope="col">Id Kriteria</th>
											<th scope="col">Nama Kriteria</th>
											<th scope="col">Bagi-V</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results3 as $row) : ?>
											<tr>
												<th scope="row"><?= $row['id_kriteria']; ?></td>
												<td><?= $row['nama_kriteria']; ?></td>
												<td><?= $row['bagi']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>
								<table class="table table-light table-striped">
									<h1 id="topsis_sipsin">Tabel Topsis SipSin</h1>
									<thead>
										<tr>
											<th scope="col">Id Alternatif</th>
											<th scope="col">D-Plus</th>
											<th scope="col">D-Min</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results4 as $row) : ?>
											<tr>
												<th scope="row"><?= $row['Id_alternatif']; ?></td>
												<td><?= $row['dplus']; ?></td>
												<td><?= $row['dmin']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<br><br>
								<table class="table table-light table-striped">
									<h1 id="topsis_terbobot">Tabel Topsis Terbobot</h1>
									<thead>
										<tr>
											<th scope="col">Id Matrix</th>
											<th scope="col">Id Alternatif</th>
											<th scope="col">Nama ALternatif</th>
											<th scope="col">Id Kriteria</th>
											<th scope="col">Nama Kriteria</th>
											<th scope="col">Id Bobot</th>
											<th scope="col">Nilai</th>
											<th scope="col">Hasil</th>
											<th scope="col">Keterangan</th>
											<th scope="col">Normalisasi</th>
											<th scope="col">Terbobot</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results5 as $row) : ?>
											<tr>
												<th scope="row"><?= $row['id_matrix']; ?></td>
												<td><?= $row['Id_alternatif']; ?></td>
												<td><?= $row['nama_alternatif']; ?></td>
												<td><?= $row['id_kriteria']; ?></td>
												<td><?= $row['nama_kriteria']; ?></td>
												<td><?= $row['id_bobot']; ?></td>
												<td><?= $row['nilai']; ?></td>
												<td><?= $row['hasil']; ?></td>
												<td><?= $row['keterangan']; ?></td>
												<td><?= $row['normalisasi']; ?></td>
												<td><?= $row['terbobot']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } else if ($url == 'multimoora') { ?>
					<div class="d-flex" id="wrapper">
						<ul id="sidebar-wrapper">
							<div class="sidebar-nav">
								<li>
									<a href="#topsis_maxmin">- Normalisasi</a>
								</li>
								<li>
									<a href="#topsis_nilaiv">- Ratio System</a>
								</li>
								<li>
									<a href="#topsis_normalisasi">- Min and Max</a>
								</li>
								<li>
									<a href="#topsis_pembagi">- Full Multiplcative</a>
								</li>
							</div>
						</ul>
						<div class="container">
							<div class="row mt-3 justify-content-center">
								<div class="col-md-9">
									<?php
									include('../config.php');

									$sql = "SELECT * FROM multimoora_1";
									$sql1 = "SELECT * FROM multimoora_2";
									$sql2 = "SELECT * FROM multimoora_3";
									$sql3 = "SELECT * FROM multimoora_4";

									$results = $config->query($sql);
									$results1 = $config->query($sql1);
									$results2 = $config->query($sql2);
									$results3 = $config->query($sql3);
									?>
									<table class="table table-light table-striped">
										<h1 id="topsis_maxmin">Tabel Multimoora Normalisasi</h1>
										<thead>
											<tr>
												<th scope="col">Id Matrix</th>
												<th scope="col">Id Alternatif</th>
												<th scope="col">Nama ALternatif</th>
												<th scope="col">Id Kriteria</th>
												<th scope="col">Nama Kriteria</th>
												<th scope="col">Id Bobot</th>
												<th scope="col">Nilai</th>
												<th scope="col">Hasil</th>
												<th scope="col">Keterangan</th>
												<th scope="col">Pra</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($results as $row) : ?>
												<tr>
													<th scope="row"><?= $row['id_matrix']; ?></td>
													<td><?= $row['Id_alternatif']; ?></td>
													<td><?= $row['nama_alternatif']; ?></td>
													<td><?= $row['id_kriteria']; ?></td>
													<td><?= $row['nama_kriteria']; ?></td>
													<td><?= $row['id_bobot']; ?></td>
													<td><?= $row['nilai']; ?></td>
													<td><?= $row['hasil']; ?></td>
													<td><?= $row['keterangan']; ?></td>
													<td><?= $row['pra']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<br><br>
									<table class="table table-light table-striped">
										<h1 id="topsis_nilaiv">Tabel Multimoora Ratio System</h1>
										<thead>
											<tr>
												<th scope="col">Id Matrix</th>
												<th scope="col">Id Alternatif</th>
												<th scope="col">Nama ALternatif</th>
												<th scope="col">Id Kriteria</th>
												<th scope="col">Nama Kriteria</th>
												<th scope="col">Id Bobot</th>
												<th scope="col">Nilai</th>
												<th scope="col">Hasil</th>
												<th scope="col">Keterangan</th>
												<th scope="col">Pra</th>
												<th scope="col">Normalisasi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($results1 as $row) : ?>
												<tr>
													<th scope="row"><?= $row['id_matrix']; ?></td>
													<td><?= $row['Id_alternatif']; ?></td>
													<td><?= $row['nama_alternatif']; ?></td>
													<td><?= $row['id_kriteria']; ?></td>
													<td><?= $row['nama_kriteria']; ?></td>
													<td><?= $row['id_bobot']; ?></td>
													<td><?= $row['nilai']; ?></td>
													<td><?= $row['hasil']; ?></td>
													<td><?= $row['keterangan']; ?></td>
													<td><?= $row['pra']; ?></td>
													<td><?= $row['normalisasi']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<br><br>
									<table class="table table-light table-striped">
										<h1 id="topsis_normalisasi">Tabel Multimoora Min and Max</h1>
										<thead>
											<tr>
												<th scope="col">Id Matrix</th>
												<th scope="col">Id Alternatif</th>
												<th scope="col">Nama ALternatif</th>
												<th scope="col">Id Kriteria</th>
												<th scope="col">Nama Kriteria</th>
												<th scope="col">Id Bobot</th>
												<th scope="col">Nilai</th>
												<th scope="col">Hasil</th>
												<th scope="col">Keterangan</th>
												<th scope="col">Pra</th>
												<th scope="col">Normalisasi</th>
												<th scope="col">Normalisasi Bobot</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($results2 as $row) : ?>
												<tr>
													<th scope="row"><?= $row['id_matrix']; ?></td>
													<td><?= $row['Id_alternatif']; ?></td>
													<td><?= $row['nama_alternatif']; ?></td>
													<td><?= $row['id_kriteria']; ?></td>
													<td><?= $row['nama_kriteria']; ?></td>
													<td><?= $row['id_bobot']; ?></td>
													<td><?= $row['nilai']; ?></td>
													<td><?= $row['hasil']; ?></td>
													<td><?= $row['keterangan']; ?></td>
													<td><?= $row['normalisasi']; ?></td>
													<td><?= $row['normalisasibobot']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<br><br>
									<table class="table table-light table-striped">
										<h1 id="topsis_pembagi">Tabel Full Multiplicative</h1>
										<thead>
											<tr>
												<th scope="col">Id Alternatif</th>
												<th scope="col">Hasil</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($results3 as $row) : ?>
												<tr>
													<th scope="row"><?= $row['Id_alternatif']; ?></td>
													<td><?= $row['hasil']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<br><br>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="container">
							<h3>Anda belum memasukkan meilih metode yang akan dilihat</h3>
						</div>
					<?php } ?>
					}

					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>