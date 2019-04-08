@extends('main')
@section('content')

<div class="container">
	

	@foreach($item as $p)
	<form action="/admin/update" method="post">
    <center>
    <input type="submit" value="Simpan Data" class="btn-success">
    </center>
		{{ csrf_field() }}
		<input type="hidden" name="idItem" value="{{ $p->idItem }}"> <br/>
        <table class="table table-dark">
        <tr>
        <td>Nama</td>
        <td><input type="text" required="required" name="namaItem" value="{{ $p->namaItem }}"></td>
        </tr>
        <tr>
        <td>Deskripsi</td> 
        <td><textarea required="required" name="deskripsi">{{ $p->deskripsi }}</textarea></td>
        </tr>
        <tr>
        <td>Asal</td> 
        <td><input type="text" required="required" name="asal" value="{{ $p->asal }}"></td>
        </tr>
        <tr>
		<td>Profil</td> 
        <td><input type="number" required="required" name="profil" value="{{ $p->profil }}"></td>
        </tr>
        <tr>
		<td>Notes</td> 
        <td><input type="text" required="required" name="notes" value="{{ $p->notes }}"></td>
        </tr>
        <tr>
		<td>Berat</td> 
        <td><input type="number" required="required" name="berat" value="{{ $p->berat }}"></td>
        </tr> 
		<td>Harga</td> 
        <td><input type="number" required="required" name="harga" value="{{ $p->harga }}"></td>
        </tr>
        <tr>
		<td>Kategori</td> 
        <td><input type="number" required="required" name="idKategori" value="{{ $p->idKategori }}"></td>
        </tr>
        <tr>
		<td>Status</td> 
        <td><input type="text" required="required" name="status" value="{{ $p->status }}"> </td>
        </tr>
        </table>
        
	</form>
	@endforeach
    </div>
	</section>
 @endsection