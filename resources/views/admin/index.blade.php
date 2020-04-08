@extends('layouts.master')

@section('content')


@include('partials.info_block')

@foreach($posts as $post)
    <div class="article">
        <div class="article-header">
            <h2>{{ $post->title }}</h2>
          <h3>
            @foreach($post->tags as $tag)
                {{ $tag->name }} &nbsp; |
            @endforeach
        </h3> 
        </div>
        <div class="article-body">
            {{ $post->content }}
        </div>
        <div class="article-footer">
            <div class="article-meta">
                
            </div>
             <div class="article-actions">
                <a href="{{ route('adminEdit', ['id'=> $post->id ]) }}">Edit</a> | 
                <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
            </div>
        </div>
      
    </div>
@endforeach
  

@endsection