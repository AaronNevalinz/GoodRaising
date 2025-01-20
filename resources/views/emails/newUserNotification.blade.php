<!DOCTYPE html>
<html>
<head>
    <title>New User Registered</title>
</head>
<body>
    <h1>New User Registered</h1>
    <p>User details:</p>
    <ul>
        <li>Name: {{ $user->fname }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Created At: {{ $user->created_at }}</li>
    </ul>
</body>
</html>
