<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
      <?php 
      include("KONEK.php");
        session_start();
        if (!isset($_SESSION['username'])) {
            header ("location:LOGIN.php");
        }
      ?>
      <div class="container p-3 mb-2 bg-secondary text-white">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand btn btn-dark font-weight-bold text-monospace" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link btn btn-dark font-weight-bold text-monospace" href="?z=beranda">BERANDA<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-dark font-weight-bold text-monospace" href="?z=MAHASISWA">MAHASISWA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-dark font-weight-bold text-monospace" href="?z=ADMIN">ADMIN</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-dark font-weight-bold text-monospace" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LAPORAN
                            </a>
                            <div class="dropdown-menu text-monospace" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item btn btn-dark font-weight-bold" href="?z=RMAHASISWA">Data Mahasiswa</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-dark font-weight-bold text-monospace" href="?z=KELUAR">KELUAR</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
         </div>
            <div class="col-md-8">
                <?php include("KONTROL.php"); ?>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>