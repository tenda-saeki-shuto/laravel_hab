<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <title>新規登録</title>
</head>
<body>
    <div class="contents">
    <h1>新規登録</h1>
    <p>ユーザー名とパスワードを入力してください。</p>
    <form action="{{Route('store')}}" method="post">
        @csrf
        <label for="username">ユーザー名:</label>
        <input type="text" id="username" name="user_name">
        <br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" class="btn_03">登録</button>
        <br>
        <a href="login.php" class="btn_26">ログイン</a>
    </form>
    </div>

</body>
</html>
