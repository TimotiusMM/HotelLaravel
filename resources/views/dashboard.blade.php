@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content-header')
    <h1 class="m-0">Dashboard</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pemesanan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Pemesan</th>
                                    <th>Cekin</th>
                                    <th>Cekout</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Di sini Anda bisa menambahkan data pemesan dari database -->
                                <!-- Di sini Anda bisa menambahkan data pemesan dari database -->
                                @foreach ($booked as $admin)
                                    @foreach ($admin->booked as $item)
                                        <tr>
                                            <td>{{ $item->nama_pemesan }}</td>
                                            <td>{{ $item->cekIn }}</td>
                                            <td>{{ $item->cekOut }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
