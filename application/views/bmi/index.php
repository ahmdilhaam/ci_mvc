<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <title>Praktikum | CI MVC | BMI</title>
</head>
<body>
    <div class="container pt-2">
        <h4>Daftar BMI Pasien <a href="<?=base_url('index.php/pasien')?>" class="btn btn-primary">Daftar Pasien</a></h4>
        <table class="table table-bordered text-center">
            <tr>
                <th>#</th>
                <th>Tanggal Periksa</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
            <?php foreach ($list_bmipasien as $key => $value):?>
            <tr>
                <td><?=$value->id?></td>
                <td><?=$value->tanggal?></td>
                <td><?=$value->pasien->kode?></td>
                <td><?=$value->pasien->nama?></td>
                <td><?=$value->pasien->gender?></td>
                <td><?=$value->bmi->berat?></td>
                <td><?=$value->bmi->tinggi?></td>
                <td><?=$value->bmi->nilai?></td>
                <td><?=$value->bmi->status?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>