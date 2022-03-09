<?php
$jumlahUang = isset($_POST['jumlahUang']) ? $_POST['jumlahUang'] : '';
$jumlahLembarSeratus = isset($_POST['jumlahLembarSeratus']) ? $_POST['jumlahLembarSeratus'] : '';
$jumlahLembarLimaPuluh = isset($_POST['jumlahLembarLimaPuluh']) ? $_POST['jumlahLembarLimaPuluh'] : '';
$jumlahLembarDuaPuluh = isset($_POST['jumlahLembarDuaPuluh']) ? $_POST['jumlahLembarDuaPuluh'] : '';
$sisaUang = 0;

// echo "Jumlah uang yang diberikan adalah Rp. $jumlahUang";
//if remaining

$mod = $jumlahUang % 100000;
$jumlahLembarSeratus = ($jumlahUang - $mod) / 100000;
$jumlahUangSeratus = $jumlahUang - ($jumlahLembarSeratus * 100000);

//variabel kedua
$mod = $jumlahUang % 50000;
$jumlahLembarLimaPuluh = ($jumlahUang - $mod) / 50000;
$jumlahUangLimaPuluh = $jumlahUang - ($jumlahLembarLimaPuluh * 50000);

//variabel ketiga
$mod = $jumlahUang % 20000;
$jumlahLembarDuaPuluh = ($jumlahUang - $mod) / 20000;
$jumlahUangDuaPuluh = $jumlahUang - ($jumlahLembarDuaPuluh * 20000);


//hitungKembalian
//$sisaUang = $jumlahUang - $jumlahUangSeratus * 1000000 - $jumlahUangLimaPuluh * 50000 - $jumlahUangDuaPuluh * 20000;
if (!jumlahUang)
    $sisaUang = $jumlahUang - $jumlahLembarSeratus * 1000000 - $jumlahLembarLimaPuluh - $jumlahLembarDuaPuluh * 20000;
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="p-4">
                <h1>Jumlah uang yang diberikan adalah <?php echo "$jumlahUang"; ?></h1>
            </div>

            <div class="p-4">
                <h2>Jumlah Rp.100.000 (dalam lembar) : <?php echo "$jumlahLembarSeratus"; ?></h2>
            </div>

            <div class="p-4">
                <h2>Jumlah Rp.50.000 (dalam lembar) : <?php echo "$jumlahLembarLimaPuluh"; ?></h2>
            </div>

            <div class="p-4">
                <h2>Jumlah Rp.20.000 (dalam lembar) : <?php echo "$jumlahLembarDuaPuluh"; ?></h2>
            </div>

            <div class="p-4">
                <h2>Sisa Uang <?php echo "$sisaUang"; ?></h2>
            </div>

        </div>
    </div>
</body>


</html>