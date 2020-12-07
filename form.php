<?php
$hasil = "";
if (isset($_POST['submit'])) {
    $nilaisatu = $_POST['nilaisatu'];
    $nilaidua = $_POST['nilaidua'];
    $hasil = intval($nilaisatu) + intval($nilaidua);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-8 m-auto">
                <div class="card text-left mt-3">
                    <div class="card-header">
                        Penjumlahan
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group">
                              <label>Nilai 1</label>
                              <input type="number" name="nilaisatu" class="form-control" placeholder="Nilai Satu">
                            </div>
                            <div class="form-group">
                              <label>Nilai 2</label>
                              <input type="number" name="nilaidua" class="form-control" placeholder="Nilai Dua">
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit" value="Tambah">
                            <div>
                                <p><?= $hasil ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>