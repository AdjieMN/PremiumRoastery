@extends('main')
@section('content')
<div class="container">
@foreach($item as $p)
	<form action="/item/addCustomer" method="post">
		{{ csrf_field() }}
        <input type="text" name="idItem" value="{{ $p->idItem }}"> <br/>
        <table class="table table-dark">
        <tr>
        <td>Nama</td>
        <td><input type="text" required="required" name="namaCustomer"></td>
        </tr>
        <tr>
        <td>Alamat</td> 
        <td><textarea required="required" name="alamatCustomer"></textarea></td>
        </tr>
        <tr>
        <td>Telepon</td> 
        <td><input type="text" required="required" name="telpCustomer" ></td>
        </tr>
        <tr>
		<td>E-mail</td> 
        <td><input type="email" required="required" name="emailCustomer" ></td>
        </tr>
        <tr>
		<td>Catatan</td> 
        <td><input type="text" required="required" name="keterangan" ></td>
        </tr>
        </table>
        <input type="submit" value="Selanjutnya">
	</form>
    @endforeach
	</div>
 @endsection