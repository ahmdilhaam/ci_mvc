<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <title>Praktikum | CI MVC | Pasien</title>
</head>
<body>
    <div class="container pt-2">
        <div class="col-md-12">
        <h3>Daftar Pasien <a href="<?=base_url()?>" class="btn btn-primary">Daftar BMI Pasien</a></h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; foreach($list_pasien as $pasien) { ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$pasien->kode?></td>
                        <td><?=$pasien->nama?></td>
                        <td><?=$pasien->gender?></td>
                    </tr><?php $nomor++; }?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>