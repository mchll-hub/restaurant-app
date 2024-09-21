<?php
include "process/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<div class="col-lg-10 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah
                        User</button>
                </div>
            </div>

            <!-- Modal Tambah User -->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="process/proses_inputuser.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="nama" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Masukan Nama.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="name@example.com" name="username" required>
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Masukan Username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="level"
                                                required>
                                                <option selected hidden value="0">Pilih Level User</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Kasir</option>
                                                <option value="3">Pelayan</option>
                                                <option value="3">Dapur</option>
                                            </select>
                                            <label for="floatingInput">Level User</label>
                                            <div class="invalid-feedback">
                                                Pilih Level User.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="08xxx" name="nohp" required>
                                            <label for="floatingInput">No HP</label>
                                            <div class="invalid-feedback">
                                                Masukan No HP.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingInput"
                                                placeholder="Password" disabled value="12345" name="password" required>
                                            <label for="floatingPassword">Password</label>
                                            <div class="invalid-feedback">
                                                Masukan Password.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;" name="alamat"
                                        required></textarea>
                                    <label for="floatingInput">Alamat</label>
                                    <div class="invalid-feedback">
                                        Masukan Alamat.
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close </button>
                                    <button type="submit" class="btn btn-primary" name="input_user_validate"
                                    value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal Tambah User End -->

        <?php
        $no = 1;
        foreach ($result as $row) {
        ?>
        <!-- Modal View -->
        <div class="modal fade" id="ModalView<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="process/proses_inputuser.php" method="POST">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input disabled type="text" class="form-control" id="floatingInput"
                                            placeholder="Your Name" name="nama" value="<?php echo $row['nama'] ?>">
                                        <label for="floatingInput">Nama</label>
                                        <div class="invalid-feedback">
                                            Masukan Nama.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input disabled type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" name="username"
                                            value="<?php echo $row['username'] ?>">
                                        <label for="floatingInput">Username</label>
                                        <div class="invalid-feedback">
                                            Masukan Username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                    <select disabled class="form-select" aria-label="Default select example" required name="level" id="">
                                        <?php
                                        $data = array("Admin", "Kasir", "Pelayan", "Dapur");
                                        foreach($data as $key => $value){
                                            if($row['level'] ==$key+1){
                                                echo "<option selected value='$key'>$value</option>";
                                            }else{
                                                echo "<option value='$key'>$value</option>";
                                            }
                                        }
                                        ?>
                                        </select>
                                        <label for="floatingInput">Level User</label>
                                        <div class="invalid-feedback">
                                            Pilih Level User.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxx"
                                            name="nohp" value="<?php echo $row['nohp'] ?>">
                                        <label for="floatingInput">No HP</label>
                                        <div class="invalid-feedback">
                                            Masukan No HP.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-floating">
                                <textarea disabled class="form-control" id="" style="height: 100px;" name="alamat"
                                    required><?php echo $row['alamat'] ?></textarea>
                                <label for="floatingInput">Alamat</label>
                                <div class="invalid-feedback">
                                    Masukan Alamat.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal View End -->

        <!-- Modal Edit -->
        <div class="modal fade" id="ModalEdit<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="process/proses_edituser.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id']?>" name="id">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Your Name" name="nama" required value="<?php echo $row['nama'] ?>">
                                        <label for="floatingInput">Nama</label>
                                        <div class="invalid-feedback">
                                            Masukan Nama.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" name="username" required
                                            value="<?php echo $row['username'] ?>">
                                        <label for="floatingInput">Username</label>
                                        <div class="invalid-feedback">
                                            Masukan Username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" required name="level" id="">
                                        <?php
                                        $data = array("Admin", "Kasir", "Pelayan", "Dapur");
                                        foreach($data as $key => $value){
                                            if($row['level'] ==$key+1){
                                                echo "<option selected value=".($key+1).">$value</option>";
                                            }else{
                                                echo "<option value=".($key+1).">$value</option>";
                                            }
                                        }
                                        ?>
                                        </select>
                                        <label for="floatingInput">Level User</label>
                                        <div class="invalid-feedback">
                                            Pilih Level User.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput" placeholder="08xxx"
                                            name="nohp" value="<?php echo $row['nohp']?>">
                                        <label for="floatingInput">No HP</label>
                                        <div class="invalid-feedback">
                                            Masukan No HP.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="form-floating">
                                <textarea class="form-control" id="" style="height: 100px;" name="alamat"
                                    required><?php echo $row['alamat'] ?></textarea>
                                <label for="floatingInput">Alamat</label>
                                <div class="invalid-feedback">
                                    Masukan Alamat.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="input_user_validate"
                                        value="12345">Save changes</button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal Edit End -->
       
        <!-- Modal Delete -->
        <div class="modal fade" id="ModalDelete<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="process/proses_deleteuser.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id']?>" name="id">
                            <div class="col-lg-12">
                                Apakah anda yakin ingin menghapus user <b><?php echo $row['username']?></b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="input_user_validate"
                                        value="12345">Hapus</button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal Delete End -->

        <?php
        }
        if (empty($result)) {
            echo "Data user tidak ada";
        } else {
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Level</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td>
                                    <?php 
                                        if($row['level']==1){
                                            echo "Admin";
                                        }else if($row['level']==2) {
                                            echo "Kasir";
                                        }else if($row['level']==3) {
                                            echo "Pelayan";
                                        }else if($row['level']==4) {
                                            echo "Dapur";
                                        } 
                                    ?>
                                </td>
                                <td><?php echo $row['nohp'] ?></td>
                                <td class="d-flex">
                                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalView<?php echo $row['id']?>"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                    data-bs-target="#ModalEdit<?php echo $row['id']?>"><i class="bi bi-pencil-square"></i></i></button>
                                    <button class="btn btn-danger btn-sm"data-bs-toggle="modal"
                                    data-bs-target="#ModalDelete<?php echo $row['id']?>"><i class="bi bi-trash3"></i></i></button>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

</script>