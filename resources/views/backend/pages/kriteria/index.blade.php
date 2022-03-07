@extends('backend/layout/app')
@section('content')
<title>Kriteria - Solok Radjo</title>
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
                <h3 class="card-title">Kriteria - Solok Radjo</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            @if(session()->get('level_pengguna') == 'Admin' )   
            <a href="{{route('kriteria.create', '0')}}" class="btn btn-success mb-2"><i class="fas fa-plus"></i> Tambah Kriteria</a>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Kriteria</th>
                            <th>Tipe Kriteria</th>
                            <th>Nilai Kriteria</th>
                            <th>Nama Sub Kriteria</th>
                            <th>Bobot Sub Kriteria</th>
                            <th>Jenis Sub Kriteria</th>
                            <th>Bobot Final Kriteria</th>
                            @if(session()->get('level_pengguna') == 'Admin')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kriteria as $no=>$kriteria )
                            <tr align="center">
                                <td>{{$no + 1}}</td>
                                <td>{{$kriteria->nama_kriteria}}</td>
                                <td>{{$kriteria->tipe_kriteria}}</td>
                                <td>{{$kriteria->nilai_sk_kriteria}}</td>
                                <td>{{$kriteria->nama_sk_kriteria}}</td>
                                <td>{{$kriteria->bobot_sk_kriteria}}</td>
                                <td>{{$kriteria->jenis_sk_kriteria}}</td>
                                <td>{{$kriteria->bobot_final_kriteria}}</td>
                                <td>
                                    @if(session()->get('level_pengguna') == 'Admin')
                                    <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Are You Sure ?')" href="{{ route('kriteria.delete', $kriteria->id_kriteria) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    @endif
                                    <!-- <button type="button" class="btn btn-danger btn-sm" onclick="mHapus('{{ route('kriteria.delete', $kriteria->id_kriteria) }}')"><i class="fa fa-trash"></i></button> -->
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
