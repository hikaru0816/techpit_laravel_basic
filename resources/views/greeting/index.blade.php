<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>
</head>
<body>
    <h1>Greetnig</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif
    <form action="{{ route('greeting.welcome') }}" method="post">
        @csrf
        <input type="text" name="username">
        <input type="submit" value="送信">
    </form>
</body>
</html>
