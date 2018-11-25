@extends('admin.layout.app')

@section('title', 'Tambah Tempat')

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
       <form action="{{ route('tempat.store') }}" method="post" enctype="multipart/form-data">
          <div class="box-body">
            
            <div class="form-group {{ $errors->has('no_ktp') ? 'has-error has-feedback' : ''}}">
             @csrf
              <label for="no_ktp">No KTP</label>
              <input type="text" name="kode_tempat" class="form-control" id="exampleInputPassword1" placeholder="Kode Tempat" value="{{ old('kode_tempat') }}">
              @if($errors->has('kode_tempat'))
                @foreach($errors->get('kode_tempat') as $pesan)
                    <small class="text-danger"><i class="fa fa-warning"></i> {{ $pesan }}</small>
                @endforeach
              @endif
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" cols="50"></textarea>
            </div>

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