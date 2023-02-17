<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif
    <form action="{{ route('profile.confirm') }}" method="post">
        @csrf
        <table>
            <tr>
                <th>ユーザー名</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <th>現在地</th>
                <td>（緯度）<input type="text" name="latitube">（経度）<input type="text" name="longitude"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
</body>
</html>
