<?php
require_once 'class_pasien.php';
require_once 'class_bmi.php';
require_once 'class_bmipasien.php';

$pasien1 = new Pasien(121,'Ahmad',"L");
$pasien1->tmp_lahir = "Bogor";
$pasien1->email = "oplikhsan@gmail.com";
$pasien1->usia = 19;

$pasien2= new Pasien(122, 'Budi', "L");
$pasien2->tmmp_lahir = "Jakarta";
$pasien2->email = "budi123@gmail.com";
$pasien2->usia = 20;

$pasien3= new Pasien(123, 'Elsa', "P");
$pasien3->tmmp_lahir = "Jakarta";
$pasien3->email = "elsanur@gmail.com";
$pasien3->usia = 18;

$bmi1 = new Bmi(57, 168);
$bmi1->nilai_bmi();
$bmi1->status_bmi();

$bmi2 = new Bmi(60, 165);
$bmi2->nilai_bmi();
$bmi2->status_bmi();

$bmi3 = new Bmi(48, 163);
$bmi3->nilai_bmi();
$bmi3->status_bmi();

$bmipasien1 = new BmiPasien($pasien1,$bmi1);
$bmipasien1->tanggal = "2022-04-9";

$bmipasien2 = new BmiPasien($pasien2,$bmi2);
$bmipasien2->tanggal = "2022-04-7";

$bmipasien3 = new BmiPasien($pasien3,$bmi3);
$bmipasien3->tanggal = "2022-04-8";


$array =[$bmipasien1, $bmipasien2, $bmipasien3];
?>
<h1 style="text-align: center;">Hasil BMI Pasien</h1>
<table class="table table-dark table-striped text-light" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>email</th>
            <th>Gender</th>
            <th>Usia</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($array as $obj){
        ?>
    </tbody>
    <tr style="text-align: center;">
        <td><?=$nomor?></td>
        <td><?=$obj->tanggal?></td>
        <td><?=$obj->pasien->id ?></td>
        <td><?=$obj->pasien->nama?></td>
        <td><?=$obj->pasien->email?></td>
        <td><?=$obj->pasien->gender?></td>
        <td><?=$obj->pasien->usia?></td>
        <td><?=$obj->bmi->berat_badan?></td>
        <td><?=$obj->bmi->tinggi_badan?></td>
        <td><?=$obj->bmi->nilai_bmi()?></td>
        <td><?=$obj->bmi->status_bmi()?></td>
    </tr>
    <?php
        $nomor++;
    }
    ?>
</table>

</div>
</body>

</html>