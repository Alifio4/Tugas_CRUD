@extends('app')

@section('content')
<div id="form" style="margin-top: 10px">
    <form action="{{ route('produk.update', $produk->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $produk->id }}"> <br/>
        <div class="mb-3">
            <label for="nama" class="form-label input-runded"> Nama Produk </label>
            <input type="text" class="form-control Background" name="nama" value= "{{ $produk->nama }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label input-runded"> Harga</label>
            <input type="text" class="form-control Background" name="harga" value= "{{ $produk->harga }}">
        </div>
        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option selected>Open this select menu</option>
            @foreach ($kategori as $item)
            <option name="kategori_id" value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection