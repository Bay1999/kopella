@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'transaksi'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Harga Total</h5>
                        <h4 class="card-title text-right"> Rp 30.000</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Barang ') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Barang') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Jumlah ') }}</label>
                                    <input type="number" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Jumlah') }}" value="{{ old('name') }}" required autofocus>
                                </div>
                                <button type="submit" class="btn btn-info mt-4">{{ __('Ke keranjang') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Keranjang</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Barang
                                    </th>
                                    <th class="text-center">
                                        Jumlah
                                    </th>
                                    <th class="text-right">
                                        Harga
                                    </th>
                                    <th class="text-center">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td class="text-right">
                                            Rp 30.000
                                        </td>
                                        <td class="text-center">
                                            <i class="nc-icon nc-settings-gear-65"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection