@extends('layouts.master')

@section('content')


@include('partials.error_block')

<div class="article">
		<div class="article-header">
			<h2>Post Details</h2>
		</div>
		<div class="article-body">
			<table>
				<tr>
					<td>Title</td>
					<td>
						<input type="text" style="width:400px;" 
						name="title" 
						form="postForm" 
						value="{{ $post->title }}"

						/>
					</td>
				</tr>
				<tr>
					<td>Body</td>
					<td>
						<textarea name='content' form='postForm' style="width:400px;" rows="10" cols="50">{{ $post->content }}</textarea>
					</td>
				</tr>
				<tr>
					<td>Tags</td>
					<td>
						<ul style="list-style-type: none;">
							@foreach($tags as $tag)
							<li>
								<input form='postForm' 
										type="checkbox" 
										name="tags[]" 
										@if($post->tags->contains($tag->id))
										checked
										@endif
										value="{{ $tag->id }}"> {{ $tag->name }}
							</li>
							@endforeach
						</ul>
					</td>
				</tr>
			</table>
			
		</div>
		<div class="article-footer">
			<div class="article-meta">
				
			</div>
			<div class="article-actions">
				<form id="postForm" action="{{ route('adminEditPost') }}" method="post">
					@csrf

					<input type="hidden" name="id" value="{{ $post->id }}">
					
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>

@endsection
