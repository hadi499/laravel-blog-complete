@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mb-4">
        <h2>{{ $post->title }}</h2>
        <p class=" mb-4"><small class="text-muted">By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none" >{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
        @if ($post->image)
        <div style="max-height: 400px; overflow:hidden;">
          <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." > 

        </div>
            
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="..." >
        @endif
        
        <article class="my-3">

            {!! $post->body !!}

        </article>
            <a href="/posts">back to posts</a>
  
      </div>
    </div>
  </div>



    
@endsection