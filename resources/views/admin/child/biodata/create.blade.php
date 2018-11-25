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
          <h3 class="box-title">Biodata Pedagang</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
       <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
          <div class="box-body">
            
            <div class="form-group {{ $errors->has('no_ktp') ? 'has-error has-feedback' : ''}}">
             @csrf
              <label for="no_ktp">No KTP</label>
              <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="No KTP (16)" value="{{ old('no_ktp') }}">
              @if($errors->has('no_ktp'))
                @foreach($errors->get('no_ktp') as $pesan)
                    <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

             <div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error has-feedback' : '' }}">
              <label for="exampleInputPassword1">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
              @if($errors->has('nama_lengkap'))
                @foreach( $errors->get('nama_lengkap') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>
            
            <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error has-feedback' : '' }}">
              <label for="exampleInputPassword1">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
               @if($errors->has('tempat_lahir'))
                @foreach( $errors->get('tempat_lahir') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

            <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error has-feedback' : '' }}">
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="tanggal_lahir">
             @if($errors->has('tanggal_lahir'))
                @foreach( $errors->get('tanggal_lahir') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>
            

          <div class="form-group">
              <label for="exampleInputPassword1">Kewarganegaraan</label>
             <select name="kewarganegaraan" class="form-control">
                <option value="">Pilih Kewarganegaraan</option>
               <option value="WNI">WNI</option>
               <option value="WNA">WNA</option>
             </select>
            </div>

          <div class="form-group">
              <label for="exampleInputPassword1">Agama</label>
             <select name="agama" class="form-control">
                <option value="">Pilih Agama</option>
               <option value="ISLAM">ISLAM</option>
               <option value="KATOLIK">KATOLIK</option>
               <option value="PROTESTAN">PROTESTAN</option>
               <option value="BUDDHA">BUDDHA</option>
               <option value="LAINNYA">LAINNYA</option>
               
             </select>
            </div>
            

            <div class="form-group ">
              <label for="exampleInputPassword1">Nama Ayah</label>
              <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama Ayah">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Nama Ibu</label>
              <input type="text" name="nama_ibu" class="form-control" id="exampleInputPassword1" placeholder="Nama Ibu">
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Nama Pasangan</label>
              <input type="text" name="nama_pasangan" class="form-control" id="exampleInputPassword1" placeholder="Nama Pasangan">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Jumlah Anak</label>
              <input type="number" name="jumlah_anak" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Anak">
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea name="alamat" class="form-control" rows="4" cols="50"></textarea>
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Nama Dagangan</label>
              <input type="text" name="nama_dagangan" class="form-control" id="exampleInputPassword1" placeholder="Nama Dagangan">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Jenis Dagangan</label>
              <input type="text" name="jenis_dagangan" class="form-control" id="exampleInputPassword1" placeholder="Jenis Dagangan">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Pendapatan</label>
              <input type="text" name="pendapatan" class="form-control" id="exampleInputPassword1" placeholder="Pendapatan">
            </div>
            
            
          <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Foto">
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