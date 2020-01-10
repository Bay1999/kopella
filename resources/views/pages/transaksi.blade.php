@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'transaksi'
])
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <form action="" class="form-group">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Roti Susu</td>
                                        <td>Rp. 10.000,00</td>
                                        <td><i class="nc-icon nc-basket"></i></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Roti Susu</td>
                                        <td>Rp. 10.000,00</td>
                                        <td><i class="nc-icon nc-basket"></i></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Roti Susu</td>
                                        <td>Rp. 10.000,00</td>
                                        <td><i class="nc-icon nc-basket"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>:</td>
                                        <td>Rp. 30.000,00</td>
                                    </tr>
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p style="text-align: center">Daftar Barang</p>
                                <hr>
                            <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <p>{{$product->nama_produk}}</p>
                                </div>
                            @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
