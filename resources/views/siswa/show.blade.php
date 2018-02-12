@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jurusan</label>	
			  			<input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}"  readonly>
			  		</div>
					
					<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" rows="10" readonly>{{ $siswa->alamat }}</textarea>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection