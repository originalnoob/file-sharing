@extends('layouts.app')

@section('title', 'Homepage')


@section('content')
<div class="container container-fixed">
   <div class="row">
	   <div class="col-md-7">
		<h1 style="font-size: 100px">SHARELOAD</h1>
		<h3>Share file effortlessly</h3>
		<p>Need to share file with your friends? Look no further! Shareload is the place to be</p>
	   </div>
	   <div class="col-md-5">	
			<h1>Step 1. Upload your file</h1>
			<div class="panel panel-default">
				<div class="panel-heading">File upload</div>
				<div class="panel-body">
					<form method="POST" action="/upload" enctype="multipart/form-data"> 
						<div class="form-group">
							<label>File</label>
							<input type="file" name="file" class="form-control"> 
							<br />
							<p class="text-muted small">Allowed file type: .png, .jpg, .gif, .mp3, .mp4, and .zip file only</p>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-primary btn-block">Upload</button>
					</form>
				</div>
			</div>
		</div>
   </div>
</div>
@endsection