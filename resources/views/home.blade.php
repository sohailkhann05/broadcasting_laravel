@extends('layouts.app')
@section('title','Home')
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
            {{-- Loading Posts --}}
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a>
                        <span style="float: right;">{{ $post->created_at->toFormattedDateString() }}</span>
                    </div>
                    <div class="card-body">
                        {{ $post->content }}
                        <hr>
                        <h5 style="float: right;">Posted: {{ $post->user->name }}</h5>
                    </div>
                </div><br>
            @endforeach
            {{-- End Loading Posts --}}
        </div>
    </div>
</div>
@endsection
