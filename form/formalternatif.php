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
                    <a href="formalternatif.php">- Form Alternatif</a>
                </li>
                <li>
                    <a href="formbobot.php">- Form Bobot</a>
                </li>
                <li>
                    <a href="formkriteria.php">- Form Kriteria</a>
                </li>
                <li>
                    <a href="formmatrix.php">- Form Matrix</a>
                </li>
                <li>
                    <a href="formskala.php">- Form Skala</a>
                </li>
            </div>
        </ul>
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-9">
                    <form action="../insert/insertalternatif.php" method="POST">
                        <h1 class="form-label">Form Alternatif</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama alternatif</label>
                            <input type="text" name="alt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>