@extends('mainAdmin')
@section('content')
<div class="container">
	<form action="/admin/store" method="post">
	<input type="submit" value="Simpan Data">
		{{ csrf_field() }}
        <table class="table table-dark">
        <tr>
        <td>Nama</td>
        <td><input type="text" required="required" name="namaItem"></td>
        </tr>
        <tr>
        <td>Deskripsi</td> 
        <td><textarea required="required" name="deskripsi"></textarea></td>
        </tr>
        <tr>
        <td>Asal</td> 
        <td><input type="text" required="required" name="asal" ></td>
        </tr>
        <tr>
		<td>Profil</td> 
        <td><input type="number" required="required" name="profil" ></td>
        </tr>
        <tr>
		<td>Notes</td> 
        <td><input type="text" required="required" name="notes" ></td>
        </tr>
        <tr>
		<td>Berat</td> 
        <td><input type="number" required="required" name="berat" ></td>
        </tr> 
		<td>Harga</td> 
        <td><input type="number" required="required" name="harga" ></td>
        </tr>
        <tr>
		<td>Kategori</td> 
        <td><input type="number" required="required" name="idKategori" ></td>
        </tr>
        <tr>
		<td>Status</td> 
        <td><input type="text" required="required" name="status" > </td>
        </tr>
        </table>
	</form>
	</div>
 @endsection