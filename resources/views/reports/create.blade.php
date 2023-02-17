<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Working Reports Create</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('reports.store') }}" method="post">
        @csrf
        <div class="form-content">
            <label for="employeeId">従業員ID</label>
            <select name="employeeId" id="employeeId">
                <option disabled selected hidden>選択してください</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{$employee->employee_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-content">
            <label for="date">作業日付</label>
            <input type="date" name="date" id="date">
        </div>
        <div class="form-content">
            <label for="time">作業時間</label>
            <input type="text" name="time" id="time">
        </div>
        <div class="form-content">
            <label for="body">概要</label>
            <textarea name="body" cols="30" rows="10" id="body"></textarea>
        </div>
        <div class="form-content">
            <button type="submit">登録</button>
        </div>
    </form>
</body>
</html>
