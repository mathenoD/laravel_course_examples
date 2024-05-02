<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show($id)
{

//     // Retrieving a user's profile
// $user = User::find(1);
// echo $user->profile->phone;

// // Retrieving a user's posts
// $posts = User::find(1)->posts;
// foreach ($posts as $post) {
//     echo $post->title;
// }

// // Retrieving comments on a post
// $post = Post::find(1);
// foreach ($post->comments as $comment) {
//     echo $comment->body;
// }

// // Retrieving comments on a video
// $video = Video::find(1);
// foreach ($video->comments as $comment) {
//     echo $comment->body;
// }

    $user = User::with(['profile', 'posts.comments'])->find($id);
    return view('user_profile', compact('user'));
}

}
