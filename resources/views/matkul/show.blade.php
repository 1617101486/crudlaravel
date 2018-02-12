@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Matkul 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mata Kuliah</label>	
			  			<input type="text" name="nama_matkul" class="form-control" value="{{ $matkul->nama_matkul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="kkm" class="form-control" value="{{ $matkul->kkm }}"  readonly>
			  		</div>
					
					
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection