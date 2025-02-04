<?php 
include "process/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu");
while ($row = mysqli_fetch_array($query)) {
    $result[] = $row;
}
?>

<div class="col-lg-9 mt-2">
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-slide="carousel">
        <div class="carousel-indicators">
            <?php
            $slide = 0;
            $firstSlideButton = true;
             foreach($result as $dataTombol){
                ($firstSlideButton) ? $aktif = 'active' : $aktif="";
                $firstSlideButton = false;
            ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $slide?>" class="<?php echo $aktif?>"
                aria-current="true" aria-label="<?php echo $slide+1?>"></button>
            <?php 
            $slide++;
            } 
            ?>
        </div>
        <div class="carousel-inner rounded" >
            <?php 
            $firstSlide = true;
            foreach($result as $data){
                ($firstSlide) ? $aktif = 'active' : $aktif = "";
                $firstSlide = false;
            ?>
            <div class="carousel-item <?php echo $aktif?>">
                <img src="assets/img/<?php echo $data['foto']?>" class="img-fluid w-100" style="height:300px; width: 1000px; object-fit: cover;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $data['nama_menu']?></h5>
                    <p><?php echo $data['keterangan']?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->

    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">MICOFFEE - APLIKASI PEMESANAN MAKANAN DAN MINUMAN CAFE</h5>
            <p class="card-text">ini adalah aplikasi pemesanan yang dapat membantu memudahkan proses dan dokumentasi pemesanan pada cafe, kelola daftar menu, proses order, dan report order dalam satu aplikasi</p>
            <a href="order" class="btn btn-primary">Buat Order</a>
        </div>
    </div>

</div>