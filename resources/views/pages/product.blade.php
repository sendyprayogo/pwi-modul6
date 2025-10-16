@extends('layouts.master')

@section('content')
<h1>Daftar produk kami</h1>
<hr>
<button type="button" class="btn btn-primary mb-3">Tambah Data</button>
<div class="card">
    <card class="card-header">
        Produk Kami
    </card>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>10</td>
                    <td>Rp. 12.000</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>19</td>
                    <td>Rp. 19.000</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>4</td>
                    <td>Rp. 5.000</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Nitro</td>
                    <td>8</td>
                    <td>Rp. 9.000.000</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection