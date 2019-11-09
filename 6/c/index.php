<?php
include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 6 C</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
</head>

<header class="header">
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center"><a href="#" class="navbar-brand py-1"><img src="../assets/img/arkademy.png" alt="Arkademy logo" style="width:100px"></a>
                <div>
                    arkademy coffeeshop
                </div>

            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a href="user-add-0.html" class="btn btn-primary" data-toggle="modal" data-target="#tambah">ADD</a></li>
            </ul>
        </div>
    </nav>
    <!-- /Navbar -->
</header>
<div style="margin-top:100px"></div>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cashier</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // pilih semua data dari tabel cashier, category dan product
                    $q = "SELECT cashier.name as cashier_name, product.name as product_name, category.name as category_name, product.price as product_price 
                    FROM cashier, product, category 
                    WHERE product.id_cashier=cashier.id and product.id_category=category.id";
                    // eksekusi
                    $query = mysqli_query($connect, $q);
                    $i = 1;
                    // perulangan menampilkan data users
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['cashier_name'] ?></td>
                            <td><?= $data['product_name'] ?></td>
                            <td><?= $data['category_name'] ?></td>
                            <td>Rp. <?= $data['product_price'] ?></td>
                            <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <select class="form-control" id="cashier">
                            <?php
                            // pilih semua data dari tabel cashier
                            $q = "SELECT * from cashier";
                            // eksekusi
                            $query = mysqli_query($connect, $q);
                            // perulangan menampilkan data users
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value=""><?= $data['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product">
                            <?php
                            // pilih semua data dari tabel cashier
                            $q = "SELECT * from product";
                            // eksekusi
                            $query = mysqli_query($connect, $q);
                            // perulangan menampilkan data product
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value=""><?= $data['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="category" placeholder="Drink" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" placeholder="Rp. 10.000" require>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">ADD</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <select class="form-control" id="cashier">
                            <?php
                            // pilih semua data dari tabel cashier
                            $q = "SELECT * from cashier";
                            // eksekusi
                            $query = mysqli_query($connect, $q);
                            // perulangan menampilkan data users
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value=""><?= $data['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product">
                            <?php
                            // pilih semua data dari tabel cashier
                            $q = "SELECT * from product";
                            // eksekusi
                            $query = mysqli_query($connect, $q);
                            // perulangan menampilkan data product
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value=""><?= $data['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="category" placeholder="Drink" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" placeholder="Rp. 10.000" require>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">EDIT</button>
            </div>
        </div>
    </div>
</div>

<body>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>

    <script>
        function hapus() {
            Swal.fire({
                title: 'Apakah anda yakin??',
                text: "Data tidak bisa di kembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Data Raisa Andriana ID #1',
                        'Berhasil Dihapus.',
                        'success'
                    )
                }
            })
        }
    </script>
</body>

</html>