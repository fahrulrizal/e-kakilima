  @extends('admin.layout.app')

  @section('title', 'Daftar Tempat')

  @section('content')
            <section class="content">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- /.box -->

                          <div class="box">
                            <div class="box-header">
                              <a class=" btn btn-success pull-right" href="{{ route('tempat.create') }}">Tambah +</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Kode Tempat</th>
                                  <th>Deskripsi</th>
                                  <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                  @foreach($tempat as $index => $t)
                                  <tr>
                                    <td>{{  $index + 1 }}</td>
                                    <td>{{ $t->kode_tempat }}</td>
                                    <td>{{ $t->deskripsi}}</td>
                                    <td>
                                    <form class="btn btn-success">
                                    <a  class="btn btn-success" href="{{ route('tempat.edit', $t->id) }}"><i class ="fa fa-pencil"></i></a> 
                                    </form>
                                    -
                                    <form action="{{ route('tempat.destroy', $t->id) }}" method="post" class="btn btn-danger">
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