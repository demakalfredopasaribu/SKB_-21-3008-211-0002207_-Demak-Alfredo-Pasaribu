@extends('layouts.app')

@section('content')
  <h1>Halaman Profile</h1>
  <a href='/profile/create' class="btn btn-primay">Tambah Data Pahlawan</a>
  <table>
      <tr>
         <td>Nama :</td>
         <td>Demak Alfredo Pasaribu</td>
      </tr>
      <tr>
         <td>Alamat :</td>
         <td> Jln. Swadaya 7 no.13, Pancoran Mas, Depok</td>
      </tr>
     <tr>
       <td> NIK : </td>
       <td>3276010507970004 </td>
     </tr>
     <tr>
       <td>Nomor Ujian : </td>
       <td>21-3008-211-0002207</textarea></td>
     </tr>
     <tr>
       <td>Akun Media Sosial : </td>
       <td>instagram/demakalfredo</td>
     </tr>
  </table>
@endsection
