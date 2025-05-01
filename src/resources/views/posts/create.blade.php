<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="title" placeholder="タイトル" value="{{ old('title') }}" />
            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
        </div>
        <div class="category">
            <h2>Category</h2>
            <select name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="body" placeholder="今日も1日お疲れさまでした。">{{ old('body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
        </div>
        <input type="submit" value="保存" />
    </form>
    <div class="back">[<a href="/">back</a>]</div>
</body>

</html>