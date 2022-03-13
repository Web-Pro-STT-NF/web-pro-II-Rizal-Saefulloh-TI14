<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>FORM NILAI SISWA</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
               <form method="GET">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" aria-describedby="matkulHelpBlock" class="custom-select">
                        <option value="">Pilih Mata Kuliah Anda</option>
                        <option value="Basis Data I">Basis Data I</option>
                        <option value="Programan Web ">Programan Web</option>
                        <option value="Dasar Dasar Programan">Dasar dasar pemrograman</option>
                    </select> 
                    
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai-uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai-uas" name="nilai-uas" placeholder="masukan nilai uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_" name="nilai_" placeholder="masukan nilai tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </div>
             </form>
              <?php
                    $proses = isset($_GET['proses']) ? $_GET['proses'] : "";
                    $nama = isset($_GET['nama']) ? $_GET['nama'] : "";
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : "";
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : "";
                    $nilai_uas = isset($_GET['nilai-uas']) ? $_GET['nilai-uas'] : "";
                    $nilai_tugas = isset($_GET['nilai_']) ? $_GET['nilai_'] : "";


                    echo "Nama :$nama";
                    echo "<br/> Mata Kuliah : $mata_kuliah";
                    echo "<br/> Nilai UTS : $nilai_uts";
                    echo "<br/> Nilai UAS : $nilai_uas";
                    echo "<br/> Nilai Tugas : $nilai_tugas";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light">
                <p>Develop by@rizal</p>
            </div>
        </div>
    </div>
</body>
</html>