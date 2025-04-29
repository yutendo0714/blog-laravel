<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>投稿の編集</h1>
    <form action="{{ route('posts.show', ['id' => $post->id]) }}" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="title" placeholder="タイトル" value="{{ $post->title }}" />
            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="body" placeholder="今日も1日お疲れさまでした。">{{ $post->body }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
        </div>
        <input type="submit" value="保存" />
    </form>
    <div class="back">[<a href="/">back</a>]</div>
</body>

</html>