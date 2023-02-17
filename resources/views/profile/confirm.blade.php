<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <h1>Confirm</h1>
    <table>
        <tr>
            <th>ユーザー名</th>
            <td>{{ session('username') }}</td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>{{ session('password') }}</td>
        </tr>
        <tr>
            <th>現在地</th>
            <td>（緯度）{{ session('latitube') }}（経度）{{ session('longitude') }}</td>
        </tr>
    </table>
</body>
</html>
