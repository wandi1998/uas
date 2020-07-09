@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8 bg-primary">
	<h3>Daftar Photo</h3>
	<a href="{{ url('/photo/create')}}" class="bg-warning">Tambah Data</a>
	<table class="table">
		<tr>
			<td>ID POST</td>
			<td>TANGGAL</td>
			<td>TITTLE</td>
			<td>UPLOAD</td>
			<td>TEKS</td>
			<td>AKSI</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->post_id }}</td>
			<td>{{ $row->photo_date }}</td>
			<td>{{ $row->photo_title }}</td>
			<td>{{ $row->photo_upload }}</td>
			<td>{{ $row->photo_teks }}</td>
			<td><form action="{{ url('photo/' . $row->photo_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button>
 					<a href="{{ url('photo/' . $row->photo_id . '/edit')}}">Edit</a> 
				</form></td>
		</tr>
		@endforeach
	</table>
</div>
</div>

@endsection