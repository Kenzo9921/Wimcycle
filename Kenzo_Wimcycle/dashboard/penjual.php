<?php
require_once "../Storage/data_penjual.php";
require_once "../Storage/data_sepeda.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../dataTables.dataTables.css">
</head>

<body>
    <?php include "../includes/headers.php" ?>

    <div class="container">

        <div class="row mt-3 mb-5">
            <div class="col-lg-6">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <h5 class="card-title">Total Sepeda</h5>
                        <h2><?php echo count($data_sepeda) ?></h2>
                        <a href="index.php" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-warning text-light">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Penjual</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h2>Data Penjual</h2>
                <button class="btn btn-primary" data-bs-target="#exampleModalTambah" data-bs-toggle="modal">Tambah Sepeda</button>
                <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="">

                                        </textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table id="tableSepeda" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>nama</th>
                    <th>tipe</th>
                    <th>harga</th>
                    <th>gambar</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($data_penjual as $penjual): ?>
                    <td><?php echo $penjual['id'] ?></td>
                    <td><?php echo $penjual['nama'] ?></td>
                    <td><?php echo $penjual['tipe'] ?></td>
                    <td><?php echo $penjual['harga'] ?></td>
                    <td>-</td>
                    <td><?php echo $penjual['deskripsi'] ?></td>
                    <td>
                        <div class="d-flex gap-3"> 
                            <!-- Button trigger modal delete-->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $penjual['nama'] ?>">
                                    Delete
                                </button>

                                <!-- Modal delete-->
                                <div class="modal fade" id="exampleModal<?php echo $penjual['nama'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data <?php echo $penjual['nama']; ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus <?php echo $penjual['tipe'] . "?"; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button trigger modal update-->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalUpdate<?php echo $penjual['nama'] ?>">
                                    Update
                                </button>

                                <!-- Modal update-->
                                <div class="modal fade" id="exampleModalUpdate<?php echo $penjual['nama'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data <?php echo $penjual['tipe']; ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                        <input type="text" value="<?php echo $penjual['nama'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Tipe</label>
                                                        <input type="text" value="<?php echo $penjual['tipe'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                                                        <input type="number" value="<?php echo $penjual['harga'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                        <textarea name="deskripsi" class="form-control" id="">
                                                            <?php echo $penjual['deskripsi'] ?>
                                                        </textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="col-12">
            <a href="./index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>



    <?php include "../includes/footera.php" ?>
    <script src="../jquery.js"></script>
    <script src="../dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script>
        new DataTable("#tableSepeda");
    </script>
</body>


</html>