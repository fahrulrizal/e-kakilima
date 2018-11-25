@extends('admin.layout.app')

@section('title', 'Tambah Pesan Tempat')

@section('content')


<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8 col-md-offset-2">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tempat</h3>
        </div>
       <form action="{{ route('pesan_tempat.store') }}" method="post" enctype="multipart/form-data">
          <div class="box-body">
            
            <div class="form-group {{ $errors->has('biodata_id') ? 'has-error has-feedback' : ''}}">
             @csrf
              <label for="no_ktp">No KTP</label>
               <select name="biodata_id" id="biodata_id" class="form-control">
                 <option value="#">--- Pilih Biodata ---</option>
                    @foreach($biodata as $b)
                    <option value="{{ $b->id }}">{{ $b->no_ktp }} | {{ $b->nama_lengkap }}</option>
                    @endforeach
                </select>
              @if($errors->has('biodata_id'))
                @foreach($errors->get('biodata_id') as $pesan)
                    <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

             <div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error has-feedback' : '' }}">
              <label for="exampleInputPassword1">Nama Lengkap</label>
              <select name="nama_lengkap" id="biodata_id" class="form-control">
                <option value="#">--- Pilih Nama Lengkap ---</option>
                    @foreach($biodata as $b)
                    <option value="{{ $b->nama_lengkap }}">{{ $b->nama_lengkap }}</option>
                    @endforeach
                </select>
              @if($errors->has('nama_lengkap'))
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @foreach( $errors->get('nama_lengkap') as $pesan)
                @endforeach
              @endif
            </div>

             <div class="form-group {{ $errors->has('tempat_id') ? 'has-error has-feedback' : '' }}">
              <label for="exampleInputPassword1">Kode Tempat</label>
               <select name="tempat_id" id="biodata_id" class="form-control">
                 <option value="#">--- Pilih Kode Tempat ---</option>
                    @foreach($tempat as $t)
                    <option value="{{ $t->id }}">{{ $t->kode_tempat }}</option>
                    @endforeach
                </select>
              @if($errors->has('tempat_id'))
                @foreach( $errors->get('tempat_id') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

            <label for="exampleInputPassword1">Harga</label>
             <div class="form-group {{ $errors->has('harga') ? 'has-error has-feedback' : '' }}">
              <input type="text" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga" value="{{ old('harga') }}">
              @if($errors->has('harga'))
                @foreach( $errors->get('harga') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

            <label for="exampleInputPassword1">Jumlah</label>
             <div class="form-group {{ $errors->has('jumlah') ? 'has-error has-feedback' : '' }}">
              <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1" placeholder="jumlah" value="{{ old('jumlah') }}">
              @if($errors->has('jumlah'))
                @foreach( $errors->get('jumlah') as $pesan)
                  <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

            <button type="submit" class="btn btn-primary" id="send">Submit</button>
          <div class="box-footer">
          </div>
        </form>
      </div>
      <!-- /.box -->

<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>


<script>

var biodata = [
  @foreach($biodata as $b)
  [ "{{ $b->nama_lengkap }}"],
  @endforeach
];

	 $("#send").on("click", function(){
        $.ajax({
        url: 'https://api.mainapi.net/smsnotification/1.0.0/messages',
        headers: {
          'Accept' : 'application/json',
          'Content-Type': 'application/x-www-form-urlencoded',
          'Authorization' : 'Bearer 80936608651fa2c01778092a18f82553',
          'X-MainAPI-Senderid' : 'TELKOM',
        },
         method: 'POST',
              data: {
                  msisdn: "085245669835",
                  content: "API Dari E-KAKI LIMA "
              },
          }).done(function(response){
            console.log(response);
    });
});
		</script>
@endsection