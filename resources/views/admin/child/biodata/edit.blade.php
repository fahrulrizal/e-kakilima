@extends('admin.layout.app')

@section('title', 'Tambah Biodata')

@section('content')



<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8 col-md-offset-2">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Biodata</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
       <form action="{{ route('biodata.update', [$biodata->id]) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
          <div class="box-body">

             <div class="form-group">
              <label for="exampleInputPassword1">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" value="{{ $biodata->nama_lengkap }}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="tempat_lahir" value="{{ $biodata->tempat_lahir }}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}">
            </div>
            

          <div class="form-group">
              <label for="exampleInputPassword1">Kewarganegaraan</label>
             <select name="kewarganegaraan" class="form-control">
                <option value="{{$biodata->kewarganegaraan}}">{{$biodata->kewarganegaraan}}</option>
               <option value="WNI">WNI</option>
               <option value="WNA">WNA</option>
             </select>
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Jumlah Anak</label>
              <input type="number" name="jumlah_anak" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Anak" value="{{ $biodata->jumlah_anak }}">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Agama</label>
              <input type="text" name="agama" class="form-control" id="exampleInputPassword1" placeholder="Agama" value="{{ $biodata->agama }}">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Nama Ayah</label>
              <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama Ayah" value="{{ $biodata->nama_ayah }}">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Nama Ibu</label>
              <input type="text" name="nama_ibu" class="form-control" id="exampleInputPassword1" placeholder="Nama Ibu" value="{{ $biodata->nama_ibu }}">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Nama Pasangan</label>
              <input type="text" name="nama_pasangan" class="form-control" id="exampleInputPassword1" placeholder="Nama Pasangan" value="{{ $biodata->nama_pasangan }}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Alamat</label>
            <textarea name="alamat" class="form-control" value="{{$biodata->alamat}}">{{ $biodata->alamat }}   
            </textarea>
            </div>
            
          
            <div class="form-group">
              <label for="exampleInputPassword1">Pendapatan</label>
              <input type="text" name="pendapatan" class="form-control" id="exampleInputPassword1" placeholder="Pendapatan" value="{{ $biodata->pendapatan }}">
            </div>
            
          <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="tempat_lahir"><img src="{{ asset('storage/'. $biodata->foto) }}" width="100" height="100">
          </div>
            </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->


@endsection

@section('js')
<script type="text/javascript">
	alert('Hallo');
</script>
@endsection