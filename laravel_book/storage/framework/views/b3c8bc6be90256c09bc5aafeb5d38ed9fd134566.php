<!-- Menghubungkan dengan view template master -->

 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- <?php $__env->startSection('judul'); ?> -->
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
    <h2>BUKU</h2>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\WEB\logaine\book\laravel_book\resources\views/haiyo.blade.php ENDPATH**/ ?>