<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
</head>
<body>
    <h1>Working Reports</h1>
    <a href="{{ route('reports.create') }}">レポートを登録する</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>作業員ID</th>
                <th>作業日付</th>
                <th>作業時間</th>
                <th>概要</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->employee_id	 }}</td>
                    <td>{{ $report->working_date }}</td>
                    <td>{{ $report->working_hours }}</td>
                    <td>{{ $report->summary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
