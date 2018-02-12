@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Matkul 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('matkul.update',$matkul->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_matkul') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mata Kuliah</label>	
			  			<input type="text" name="nama_matkul" class="form-control" value="{{ $matkul->nama_matkul }}"  required>
			  			@if ($errors->has('nama_matkul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_matkul') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('kkm') ? ' has-error' : '' }}">
			  			<label class="control-label">KKM</label>	
			  			<input type="text" name="kkm" class="form-control" value="{{ $matkul->kkm }}"  required>
			  			@if ($errors->has('kkm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kkm') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection