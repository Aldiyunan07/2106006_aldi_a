<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="header mb-3">
                    <h4>Form Tambah Mahasiswa</h4>
                </div>
                <form action="proses_input.php" method="post">
                    <div class="form-group mb-2">
                        <label class="mb-2" for="">Nama</label>
                        <input autocomplete="off" required type="text" style="width:80%;" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-2" for="">NIM</label>
                        <input autocomplete="off" required type="text" maxlength="7" style="width:80%;" name="nim" id="nim" class="form-control">
                        <small class="text-danger"><i>*hanya menerima angka</i></small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-2" for="">Usia</label>
                        <input autocomplete="off" min="1" max="99" required type="number" style="width:80%;" name="usia" id="" class="form-control">
                        <small class="text-danger"><i>*batas usia (1-99)</i></small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-2" for="">Email</label>
                        <input autocomplete="off" required type="email" style="width:80%;" name="email" id="" class="form-control">
                        <small class="text-danger"><i>*harus mencantumkan @</i></small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-2" for="">Jenis Kelamin</label>
                        <br>
                        <input type="radio" required name="jenis_kelamin" class="form-check-input me-2" value="laki laki" id=""> Laki Laki
                        <input type="radio" required name="jenis_kelamin" class="form-check-input ms-2 me-2" value="perempuan" id=""> Perempuan
                    </div>
                    <button type="submit" name="tambah" class="btn btn-success mt-2">Tambah</button>
                </form>
            </div>
            <div class="col-12 col-md-8">
                <div class="content mb-3">
                    <h4>Data Mahasiswa ITG</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>

                        </tr>
                        <?php 
                        $no = 1;
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                        while ($d = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $d['nim'] ?></td>
                            <td> <?= ucwords($d['name']) ?></td>
                            <td> <?= $d['usia'] ?> </td>
                            <td> <?= $d['email'] ?></td>
                            <td> <?= ucwords($d['jenis_kelamin']) ?> </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
document.getElementById('nim').addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script>

</html>