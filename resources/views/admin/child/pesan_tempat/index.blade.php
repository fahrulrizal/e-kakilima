@extends('admin.layout.app')

@section('title', 'Pesan Tempat')

@section('content')
          <section class="content">
                     <div class="row">
                       <div class="col-md-12">
                         <!-- /.box -->

                         <div class="box">
                           <div class="box-header">
                            <a class=" btn btn-success pull-right" href="{{ route('pesan_tempat.create') }}">Tambah +</a>
                           </div>
                           <!-- /.box-header -->
                           <div class="box-body">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                               <tr>
                                <th>No</th>
                                <th>No KTP</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                               </tr>
                               </thead>
                               <tbody>
                                  @foreach($pesantempat as $index => $p)
                                  <tr>
                                    <td>{{  $index + 1 }}</td>
                                    <td>{{ $p->Biodata->no_ktp }}</td>
                                    <td>{{ $p->Biodata->nama_lengkap}}</td>
                                     <td>{{ $p->Tempat->kode_tempat}}</td>
                                      <td>{{ $p->harga}}</td>
                                       <td>{{ $p->jumlah}}</td>
                                    <td>
                                  <form class="btn btn-success">
                                    <a  class="btn btn-success" href="{{ url('admin/print', $p->id) }}" target="_blank"><i class ="fa fa-print"></i></a> 
                                    </form>
                                    <form class="btn btn-success">
                                    <a  class="btn btn-success" href="{{ route('pesan_tempat.edit', $p->id) }}"><i class="fa fa fa-pencil"></i></a> 
                                    </form>
                                    -
                                    <form action="{{ route('pesan_tempat.destroy', $p->id) }}" method="post" class="btn btn-danger">
                                    @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                  </td>
                                  </tr>
                                  @endforeach
                                
                               </tbody>
                              
                             </table>
                           </div>
                           <!-- /.box-body -->
                         </div>
                         <!-- /.box -->
                       </div>
                       <!-- /.col -->
                     </div>
                     <!-- /.row -->
                   </section>

@endsection