@extends('backend/layout/app')
@section('content')
<title>SPK Solok Radjo</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hello, {{Session()->get('nama_pengguna')}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">SPK Solok Radjo</h3>
            </div>
            <!-- /.card-header -->
            
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama Pemilik</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($home as $no=>$home )
                            <tr align="center">
                                <td>{{$no + 1}}</td>
                                <td>{{$home->nama_pengguna}}</td>
                                <td>{{$home->hasil_final_sub_kriteria}}</td>
                                
                            </tr>
                        @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
