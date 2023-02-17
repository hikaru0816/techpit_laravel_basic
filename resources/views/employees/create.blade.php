<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>
<body>
    <h1>Create</h1>
    <form action="{{ route('employees.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <th>氏名</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>部署</th>
                <td><input type="text" name="section"></td>
            </tr>
            <tr>
                <th>基本給</th>
                <td><input type="text" name="salary"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
</body>
</html>
