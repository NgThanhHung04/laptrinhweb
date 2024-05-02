<!-- resources/views/user/detail.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Thông tin chi tiết người dùng</title>
</head>
<body>
    <h1>Thông tin chi tiết người dùng</h1>

    <h2>Thông tin người dùng</h2>
    <p>Họ và tên: {{ $userProfile->full_name }}</p>
    <p>Email: {{ $userProfile->email }}</p>

    <h2>Bài viết</h2>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>

    <h2>Sở thích</h2>
    <ul>
        @foreach ($interests as $interest)
            <li>{{ $interest->name }}</li>
        @endforeach
    </ul>
</body>
</html>