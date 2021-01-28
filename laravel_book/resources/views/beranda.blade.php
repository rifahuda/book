<!-- Menghubungkan dengan view template master -->
@extends('dashboard')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul') -->
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <h2>Selamat Datang !</h2>
	<p>Ini Adalah Halaman Beranda</p>
	<div class="col-sm-1">
                    <div class="title-action">

                        <a href="#myModal" data-toggle="modal" class="btn btn-primary">Edit Profile</a>
                     
                    </div>
                </div>
 
@endsection