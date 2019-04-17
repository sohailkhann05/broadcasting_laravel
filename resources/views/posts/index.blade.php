@extends('layouts.app')
@section('title','Posts')
@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            @if (session('status'))
	                <div class="alert alert-success" role="alert">
	                    {{ session('status') }}
	                </div>
	            @endif
	            {{-- New Post Card --}}
	            <div class="card">
	                <div class="card-header">New Post</div>
	                <div class="card-body">
	                    Whats on your mind?
	                </div>
	            </div><br>
	            {{-- End New Post Card --}}
			</div>
		</div>
	</div>

@endsection