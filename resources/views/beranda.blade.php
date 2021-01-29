<!-- Menghubungkan dengan view template master -->
@extends('dashboard')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul') -->
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <h2>Selamat Datang !</h2>
	<p>Selamat datang   {{Session::get('user')->u_username}}, saat ini anda sedang berada di web buku. Silahkan melakukan edit profile untuk kenyamanan anda. Dan melakukan Login ulang dengan username dan password baru anda, abaikan pesan ini jika sudah edit profile.</p>
    <a href="#myModal" data-toggle="modal" class="btn btn-primary">Edit Profile</a>
	<!-- <div class="col-sm-1">
                    <div class="title-action">

                        <a href="#myModal" data-toggle="modal" class="btn btn-primary">Edit Profile</a>
                     
                    </div>
                </div> -->
 
@endsection