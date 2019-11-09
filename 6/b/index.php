<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 6 B</title>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Pevita Pearce</td>
                        <td>Latte</td>
                        <td>Drink</td>
                        <td>Rp. 10.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Raisa Andriana</td>
                        <td>Cake</td>
                        <td>Food</td>
                        <td>Rp. 15.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Raisa Andriana</td>
                        <td>Fried Rice</td>
                        <td>Food</td>
                        <td>Rp. 30.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Pevita Pearce</td>
                        <td>Gudeg</td>
                        <td>Food</td>
                        <td>Rp. 35.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Joko Purwadhi</td>
                        <td>Ice Tea</td>
                        <td>Drink</td>
                        <td>Rp. 55.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Halim Hasanudin</td>
                        <td>Steamed Sponge Cake</td>
                        <td>Food</td>
                        <td>Rp. 50.000</td>
                        <td><a href="#" class="text-success" data-toggle="modal" data-target="#edit">Edit</a> | <a href="#" class="text-danger" onclick="hapus()">Delete</a></td>
                    </tr>
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
                            <option>Raisa Andriana</option>
                            <option>Joko Purwadhi</option>
                            <option>Halim Hasanudin</option>
                            <option>Pevita Pearce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product">
                            <option>Ice Tea</option>
                            <option>Latte</option>
                            <option>Gudeg</option>
                            <option>Steamed Sponge Cake</option>
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
                            <option>Raisa Andriana</option>
                            <option>Joko Purwadhi</option>
                            <option>Halim Hasanudin</option>
                            <option>Pevita Pearce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product">
                            <option>Ice Tea</option>
                            <option>Latte</option>
                            <option>Gudeg</option>
                            <option>Steamed Sponge Cake</option>
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