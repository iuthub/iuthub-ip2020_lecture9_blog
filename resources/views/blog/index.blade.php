{{-- <?php $msg='<script>alert("hello")</script>' ?> --}}

@extends('layouts.master')

@section('content')

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
                Edited: {{ $post->updated_at }}
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
