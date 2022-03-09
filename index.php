<html>

<head?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    </head>

    <body>
        <div class="container pt-4">
            <div class="row">
                <form action="hitungUang.php" method="post">
                    <div class="jumlahContainer">
                        <label for="inputJumlah" class="form-label">Masukkan Jumlah Uang:</label>
                        <input type="text" class="form-control" name="jumlahUang" id="inputJumlah" />
                    </div>
                    <div class="pecahan100">
                        <label for="inputPecahan100" class="form-label">Masukkan Jumlah Lembaran 100.000</label>
                        <input type="number" name="inputPecahan100" class="form-control" id="inputPecahan100" rows="1" />
                    </div>
                    <div class="pecahan50">
                        <label for="inputPecahan50" class="form-label">
                            Masukkan Jumlah Lembaran 50.000
                        </label>
                        <input type="number" name="inputPecahan50" class="form-control" id="inputPecahan50" rows="1" />
                    </div>
                    <div class="pecahan20">
                        <label for="inputPecahan20" class="form-label">
                            Masukkan Jumlah Lembaran 20.000
                        </label>
                        <input type="number" name="inputPecahan20" class="form-control" id="inputPecahan20" rows="1" />
                    </div>

                    <div class="mt-2">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>