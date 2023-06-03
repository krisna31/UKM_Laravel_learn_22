@include('produk.header')


<h1>Ini Halaman Produk </h1>

<table class="table table-striped">
    <tr>
        <td><b>Makanan</b></td>
        <td><b>Minuman</b></td>
    </tr>
    @foreach ($produk as $p)

    <tr>
        <td>{{ $p->Nama }}</td>
        <td>{{ $p->Harga }}</td>
    </tr>

    @endforeach
</table>



@include('produk.footer')
