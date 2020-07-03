@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}

	</style>
</body>
<div class="container">
	<div class="col-md-10">

	<h2>Input Data Post</h2>
	<form method="post" action="{{url('/post')}}" >
	@csrf
		<table>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori ID</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control" style="background-color: lightblue">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
					@endforeach
				</select>	
			</div>
			</div>
			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" class="form-control" id="inputEmail3" style="background-color: lightblue">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" class="form-control" id="inputEmail3" style="background-color: lightblue">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" class="form-control" id="inputEmail3" style="background-color: lightblue">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" class="form-control" id="inputEmail3" style="background-color: lightblue">
			</div>
			</div>

		</table>
			<div class="form-group row">
				<button type="submit" class="btn  bg-success" style="background-color: lightpink">SIMPAN</button>

	</form>
</div>
</html>


@endsection