@extends('layouts.app')

@section('title', 'Upload Successfull')


@section('content')
<div class="container container-fixed">
<h1>Your file has been uploaded successfully</h1>
<p>Link to download your file</p>
<div class="well">
<a href="{{ $downloadlink }}">http://127.0.0.1{{ $downloadlink }}</a>	
</div>
</div>
@endsection