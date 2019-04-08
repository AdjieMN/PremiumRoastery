@extends('main')
@section('content')
<div class="container">
@foreach($customer as $c)

@foreach($item as $p)
	<form action="/item/addOrder" method="post">
		{{ csrf_field() }}
        <input type="text" name="idItem" value="{{ $p->idItem }}"> <br/>
        <input type="text" name="hargaItem" value="{{ $p->harga }}"> <br/>
        <input type="text" name="idCustomer" value="{{ $c->idCustomer }}"> <br/>
        <div class="form-group">
            <label for="jumlah">Jumlah :</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah">
        </div>
        <div class="form-group">
            <label for="idDetailShipment">Pengiriman :</label>
            <input type="text" class="form-control" id="idDetailShipment" name="idDetailShipment">
        </div>
        <input type="submit" value="Selanjutnya">
	</form>
    @endforeach
    @endforeach
	</div>
 @endsection