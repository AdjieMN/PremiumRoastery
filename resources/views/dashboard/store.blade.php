@extends('main')
@section('content')
<div class="container">
	<table class="table table-striped table-dark" >
		<thead>
		<tr>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Asal</th>
			<th>Profil</th>
			<th>Notes</th>
            <th>Berat</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Status</th>
		</tr>
		</thead>
		@foreach($item as $p)
		<tbody>
		<tr>
			<td>{{ $p->namaItem }}</td>
            <td>{{ $p->deskripsi }}</td>
            <td>{{ $p->asal }}</td>
            <td>{{ $p->profil }}</td>
            <td>{{ $p->notes }}</td>
            <td>{{ $p->berat }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->idKategori }}</td>
            <td>{{ $p->status }}</td>
			
			<td>
				<a href="/item/order/{{ $p->idItem }}">Order</a>
				
			</td>
		</tr>
		</tbody>
		@endforeach
	</table>
	</div>
 @endsection