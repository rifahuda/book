<!-- Menghubungkan dengan view template master -->

 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- <?php $__env->startSection('judul'); ?> -->
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
    <h2>Selamat Datang !</h2>
	<p>Selamat datang   <?php echo e(Session::get('user')->u_username); ?>, saat ini anda sedang berada di web buku. Silahkan melakukan edit profile untuk kenyamanan anda. Dan melakukan Login ulang dengan username dan password baru anda, abaikan pesan ini jika sudah edit profile.</p>
    <a href="#myModal" data-toggle="modal" class="btn btn-primary">Edit Profile</a>
	<!-- <div class="col-sm-1">
                    <div class="title-action">

                        <a href="#myModal" data-toggle="modal" class="btn btn-primary">Edit Profile</a>
                     
                    </div>
                </div> -->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\WEB\logaine\book\laravel_book\resources\views/beranda.blade.php ENDPATH**/ ?>