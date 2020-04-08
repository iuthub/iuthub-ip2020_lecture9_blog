<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostsRepo;
use App\Post;
use App\Like;
use App\Tag;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    
    public function getIndex() {
    	// $postsRepo = new PostsRepo($session);

    	return view('blog.index', [
    		'posts' => Post::orderBy('title', 'desc')->get()
    	]);
    }

    public function getLikePost($id) {
        $post = Post::find($id);
        $post->likes()->save(new Like());

        return redirect()->back();
    }


    public function getBlogPost($id) {
    	// $postsRepo = new PostsRepo($session);

	    return view('blog.post', [
	    	'post' => Post::find($id)
	    ]);
    }

    public function getBlogPostByTitle($title) {
        // $postsRepo = new PostsRepo($session);

        return view('blog.post', [
            'post' => Post::where('title','=', $title)->first()
        ]);   
    }

    public function getOthersAbout() {
    	return view('others.about');
    }

    public function getAdminIndex(Store $session) {
	
		// $postsRepo = new PostsRepo($session);

    	return view('admin.index', [
    		 'posts' => Post::all()
    	]);
    }

    public function getAdminEdit($id) {
    	// $postsRepo = new PostsRepo($session);
    	$post = Post::find($id);
        $tags = Tag::all();

    	return view('admin.edit', [
    		'post' => $post,
            'tags' => $tags
    	]);
    }

    public function postAdminEdit(Request $req) {
    	$this->validate($req, [
			'title' => 'required|min:5',
			'content' => 'required|min:5'
		]);

    	
        $post = Post::find($req->input('id'));
        $post->title = $req->input('title');
        $post->content = $req->input('content');
        $post->save();

        $post->tags()->sync($req->input('tags')===null?[]:$req->input('tags'));

    	return redirect()->route('adminIndex')->with([
			'info'=>'Successfully updated! Post title is '. $req->input('title')
		]);
    }

    public function getAdminCreate() {
        $tags = Tag::all();

        return view('admin.create', [
            'tags' => $tags
        ]);
    }


    public function postAdminCreate(Request $req) {
        $this->validate($req, [
            'title' => 'required|min:5',
            'content' => 'required|min:5'
        ]);

        $user = Auth::user();

        $post = new Post([
            'title'=> $req->input('title'),
            'content' => $req->input('content')
        ]);
        
        $user->posts()->save($post);

        $post->tags()->attach($req->input('tags')===null?[]:$req->input('tags'));

        return redirect()->route('adminIndex')->with([
            'info'=>'Successfully created! Post title is '. $req->input('title')
        ]);
    }

    public function getAdminDelete($id) {
        // $postsRepo = new PostsRepo($session);
        // $postsRepo->deletePost($id);

        Post::find($id)->delete();

        return redirect()->route('adminIndex')->with([
            'info'=>'Successfully deleted!  Post id is '. $id
        ]);
    }   

    


}
