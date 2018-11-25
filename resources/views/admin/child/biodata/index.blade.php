@extends('admin.layout.app')

@section('title', 'Daftar Biodata')

@section('content')
          <section class="content">
                     <div class="row">
                       <div class="col-md-12">
                         <!-- /.box -->

                         <div class="box">
                           <div class="box-header">
                            <a class=" btn btn-success pull-right" href="{{ route('biodata.create') }}">Tambah +</a>
                           </div>
                           <!-- /.box-header -->
                           <div class="box-body">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                               <tr>
                                <th>No</th>
                                 <th>NO KTP</th>
                                 <th>Nama Lengkap</th>
                                 <th>Tempat Lahir</th>
                                 <th>Tanggal Lahir</th>
                                 <th>Kewarganegaraan</th>
                                 <th>Agama</th>
                                 <th>Nama Ayah</th>
                                 <th>Nama Ibu</th>
                                 <th>Nama Pasangan</th>
                                <th>Jumlah Anak</th>
                                 <th>Alamat</th>
                                 <th>Nama Dagangan</th>
                                 <th>Jenis Dagangan</th>
                                 <th>Pendapatan</th>
                                 <th>Foto</th>
                                 <th>Aksi</th>
                               </tr>
                               </thead>

                               <tbody>
                                 @foreach($biodata as $index => $b)
                                 <tr>
                                  <td>{{  $index + 1 }}</td>
                                   <td>{{ $b->no_ktp }}</td>
                                   <td>{{ $b->nama_lengkap}}</td>
                                   <td>{{ $b->tempat_lahir}}</td>
                                   <td>{{ $b->tanggal_lahir}}</td>
                                   <td>{{ $b->kewarganegaraan}}</td>
                                   <td>{{ $b->agama}}</td>
                                   <td>{{ $b->nama_ayah}}</td>
                                   <td>{{ $b->nama_ibu}}</td>
                                   <td>{{ $b->nama_pasangan}}</td>
                                   <td>{{ $b->jumlah_anak}}</td>
                                   <td>{{ $b->alamat}}</td>
                                   <td>{{ $b->nama_dagangan}}</td>
                                   <td>{{ $b->jenis_dagangan}}</td>
                                   <td>{{ $b->pendapatan}}</td>
                                   <td><img src="{{ asset('storage/' . $b->foto) }}" / width="100" height="100"></td>
                                   <td>
                                  <form class="btn btn-success">
                                   <a  class="btn btn-success" href="{{ route('biodata.edit', $b->id) }}"><i class ="fa fa-pencil"></i></a> 
                                  </form>
                                  -
                                   <form action="{{ route('biodata.destroy', $b->id) }}" method="post" class="btn btn-danger">
                                       @method('delete')
                                       @csrf
                                       <button type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data ini?')"><i class ="fa fa-trash"></i></button>
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

@section('js')
<script type="text/javascript">
	alert('Hallo');
</script>
@endsection