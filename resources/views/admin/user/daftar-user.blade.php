@extends('layouts.admin-layout')

@section('title', 'Daftar Users')

@push('after-style')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@section('main-content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
        
            <div class="card">
                <div class="card-header">
                    {{-- <div class="row"> --}}
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <h3 class="card-title d-flex my-auto py-auto">Daftar User</h3>
                            </div>
                    {{-- </div> --}}
                </div>

                <!-- /.card-header -->
                <div class="card-body">

                    <button class="btn btn-info d-flex my-auto py-auto mr-3 float-right" onclick="window.location.href='{{ route('admin-index') }}'">Kembali</button>

                    <table id="example" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead class="bg-dark text-white shadow">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Gender</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $detail as $item )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->detail_nama }}</td>
                                    <td>{{ $item->detail_telepon }}</td>
                                    <td>{{ $item->detail_alamat }}</td>
                                    <td>
                                        @if ($item->detail_jeniskelamin == 'L')
                                        Laki - Laki 
                                        @elseif ($item->detail_jeniskelamin == 'P')
                                        Perempuan
                                        @endif   
                                    </td>
                                    <td>
                                        @if ($item->detail_role == 'guest')
                                        <span class="badge badge-info">USER</span>
                                        @elseif ($item->detail_role == 'user')
                                        <span class="badge badge-success">GUEST</span>
                                        @endif       
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>

        </div>

    </div>
@endsection

@push('after-script')
<script src="{{ asset('vendor/adminlte/') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('vendor/adminlte/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush