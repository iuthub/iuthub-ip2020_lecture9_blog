{{-- <?php $msg='<script>alert("hello")</script>' ?> --}}

@extends('layouts.master')

@section('content')

@foreach($posts as $post)
    <div class="article">
        <div class="article-header">
            <h2>{{ $post->title }}</h2>

            <h3>
               {{ $post->tags->implode('name', ' | ') }}
            </h3> 

        </div>
        <div class="article-body">
            {{ $post->content }}
        </div>
        <div class="article-footer">
            <div class="article-meta">
                Author: {{ $post->user->name }} &nbsp; | &nbsp; 
                Edit: {{ $post->updated_at->format('d/m/Y') }}
            </div>
            <div class="article-actions">
                <a href="{{ route('blogLikePost', ['id'=> $post->id]) }}">Likes 
                    {{ count($post->likes) }} </a> &nbsp; | &nbsp;

                <a href="{{ route('blogPost', ['id'=> $post->id]) }}">More...</a>
            </div>
        </div>
    </div>
@endforeach

@endsection
