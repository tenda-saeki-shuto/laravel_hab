<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>ログイン</title>
</head>
<body>
    <div class="contents">
        <h1>ログイン</h1>
        <p>ユーザー名とパスワードを入力してください。</p>
        <form action="{{Route('login')}}" method="post">
            @csrf
            <font color="red" size="4">
            <br>
            </font>
            <label for="username">ユーザー名:</label>
            <input type="text" id="username" name="user_name" required>
            <br>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" class="btn_03">ログイン</button>
            <br>
            <a href="registration.php" class="btn_26">新規登録</a>

    </div>
</body>
</html>
