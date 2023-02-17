<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lot</title>
</head>
<body>
    <h1>Lot</h1>
    <p>くじを引きました！</p>
    <p>
        {{ $number }}番
        @if ($number === 1)
            {{ $prizes[0] }}です！
        @elseif ($number === 2)
            {{ $prizes[1] }}です！
        @else
            {{ $prizes[2] }}です！
        @endif
    </p>
    <p>この中から引きました。</p>
    <ul>
        @for ($i = 0; $i < count($prizes); $i++)
            <li>{{ $prizes[$i] }}</li>
        @endfor
        @foreach ($prizes as $prize)
            <li>{{ $prize }}</li>
        @endforeach
    </ul>
</body>
</html>
