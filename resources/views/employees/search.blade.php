<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <h1>Employees</h1>
    <form action="{{ route('employees.search') }}" method="get">
        <input type="text" name="employee_name_like">
        <input type="submit" value="検索">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>氏名</th>
            <th>部署</th>
            <th>基本給</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->section }}</td>
                <td>{{ $employee->salary }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
