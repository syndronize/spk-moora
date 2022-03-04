@extends('backend/layout/app')
@section('content')
<title>Penilain Sub Kriteria - Solok Radjo</title>
<br>
<br>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
            @if(Session::get('message'))
            <div class="alert alert-success" style="" id="message">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            </div>
            @endif

            <div class="card-header">
                <h3 class="card-title">Penilaian Sub Kriteria - Solok Radjo</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <a href="{{route('sk.create', '0')}}" class="btn btn-success mb-2"><i class="fas fa-plus"></i> Tambah Kriteria</a>
            <a href="{{route('sk.cetak')}}" target="_blank" class="btn btn-success mb-2"><i class="fas fa-print"></i> Data Kriteria</a>  
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Pemilik</th>
                            <th>Jumlah Memiliki Air 13% - 15%</th>
                            <th>Biji Hitam</th>
                            <th>Biji Coklat</th>
                            <th>Biji Berjamur</th>
                            <th>Kulit Kering</th>
                            <th>Biji Berlubang</th>
                            <th>Biji Putih</th>
                            <th>Biji Rusak</th>
                            <th>Biji Keriput</th>
                            <th>Biji Berkuping</th>
                            <th>Biji Seragam</th>
                            <th>Caramel</th>
                            <th>Fresh Butter</th>
                            <th>Roasted Peanuts</th>
                            <th>Roasted Hazelnuts</th>
                            <th>Roasted Almonds</th>
                            <th>Walnuts</th>
                            <th>Dark Chocolate</th>
                            <th>Vanilla</th>
                            <th>Toast</th>
                            <th>Earthy</th>
                            <th>Lemon</th>
                            <th>Straw</th>
                            <th>Coffee Plup</th>
                            <th>Basmati Rice</th>
                            <th>Medicinal</th>
                            <th>Smoke</th>
                            <th>Pepper</th>
                            <th>Clove Like</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sk as $no=>$sk )
                            <tr align="center">
                                <td>{{$no + 1}}</td>
                                <td>{{$sk->nama_pengguna}}</td>
                                <td>{{$sk->c1_sub_kriteria}}</td>
                                <td>{{$sk->c21_sub_kriteria}}</td>
                                <td>{{$sk->c22_sub_kriteria}}</td>
                                <td>{{$sk->c23_sub_kriteria}}</td>
                                <td>{{$sk->c24_sub_kriteria}}</td>
                                <td>{{$sk->c25_sub_kriteria}}</td>
                                <td>{{$sk->c26_sub_kriteria}}</td>
                                <td>{{$sk->c27_sub_kriteria}}</td>
                                <td>{{$sk->c28_sub_kriteria}}</td>
                                <td>{{$sk->c29_sub_kriteria}}</td>
                                <td>{{$sk->c31_sub_kriteria}}</td>
                                <td>{{$sk->c41_sub_kriteria}}</td>
                                <td>{{$sk->c42_sub_kriteria}}</td>
                                <td>{{$sk->c43_sub_kriteria}}</td>
                                <td>{{$sk->c44_sub_kriteria}}</td>
                                <td>{{$sk->c45_sub_kriteria}}</td>
                                <td>{{$sk->c46_sub_kriteria}}</td>
                                <td>{{$sk->c47_sub_kriteria}}</td>
                                <td>{{$sk->c48_sub_kriteria}}</td>
                                <td>{{$sk->c49_sub_kriteria}}</td>
                                <td>{{$sk->c51_sub_kriteria}}</td>
                                <td>{{$sk->c52_sub_kriteria}}</td>
                                <td>{{$sk->c53_sub_kriteria}}</td>
                                <td>{{$sk->c54_sub_kriteria}}</td>
                                <td>{{$sk->c55_sub_kriteria}}</td>
                                <td>{{$sk->c56_sub_kriteria}}</td>
                                <td>{{$sk->c57_sub_kriteria}}</td>
                                <td>{{$sk->c58_sub_kriteria}}</td>
                                <td>{{$sk->c59_sub_kriteria}}</td>
                                <td>
                                    <a href="{{ route('sk.edit', $sk->id_sub_kriteria) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Are You Sure ?')" href="{{ route('sk.delete', $sk->id_sub_kriteria) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    <!-- <button type="button" class="btn btn-danger btn-sm" onclick="mHapus('{{ route('sk.delete', $sk->id_sub_kriteria) }}')"><i class="fa fa-trash"></i></button> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.row (main row) -->
    </div>
    <!-- modal hapus -->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="formDelete">
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    Yakin Hapus Data ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // untuk hapus data
    function mHapus(url) {
        $('#ModalHapus').modal()
        $('#formDelete').attr('action', url);
    }

</script>
    @if (session()->has('message'))
    <script>
        // $('#message').show();
        setTimeout(function () {
            $('#message').remove();
        }, 3000);

    </script>
    @endif
    <!-- /.container-fluid -->
</section>
@endsection
