<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; }
        .container { width: 80%; margin: 20px auto; background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #555; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .profile, .posts, .comments { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <h1>User Profile</h1>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->profile->phone ?? 'No phone number available' }}</p>
        </div>
        <div class="posts">
            <h1>Posts</h1>
            <ul>
                @foreach ($user->posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                    <div class="comments">
                        <h3>Comments</h3>
                        <ul>
                            @foreach ($post->comments as $comment)
                            <li>{{ $comment->body }}</li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
