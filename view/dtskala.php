<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
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
								<li><a class="dropdown-item" href="../result/result.php?metode=saw">Metode SAW</a></li>
								<li><a class="dropdown-item" href="../result/result.php?metode=wp">Metode WP</a></li>
								<li><a class="dropdown-item" href="../result/result.php?metode=topsis">Metode TOPSIS</a></li>
								<li><a class="dropdown-item" href="../result/result.php?metode=multimoora">Metode MULTIMOORA</a></li>
							</ul>
						</li>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="d-flex" id="wrapper">
		<ul id="sidebar-wrapper">
			<div class="sidebar-nav">
				<li>
					<a href="dtalternatif.php">- Alternatif</a>
				</li>
				<li>
					<a href="dtbobot.php">- Bobot</a>
				</li>
				<li>
					<a href="dtkriteria.php">- Kriteria</a>
				</li>
				<li>
					<a href="dtmatrix.php">- Matrix</a>
				</li>
				<li>
					<a href="dtskala.php">- Skala</a>
				</li>
			</div>
		</ul>
		<div class="container">
			<div class="row mt-3 justify-content-center">
				<div class="col-md-9">
					<?php
					include('../config.php');
					$sql = "SELECT * FROM skala";
					$results = $config->query($sql);
					?>
					<table class="table table-light table-striped">
						<thead>
							<tr>
								<th scope="col">id skala</th>
								<th scope="col">Value</th>
								<th scope="col">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($results as $row) : ?>
								<tr>
									<th scope="row"><?= $row['id_skala']; ?></td>
									<td><?= $row['nilai']; ?></td>
									<td><?= $row['keterangan']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>