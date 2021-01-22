<!DOCTYPE html>
<html long = "ja">
    <head>
        <meta charset='utf-8'>
        <title>flight pattern</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/top.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>ダイヤ自動生成サイト</h1>

        <a class = "btn btn-primary" href="/input">ダイヤを入力</a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <table border="1">
            <tr>
                <th>便名</th>
                <th>出発地</th>
                <th>到着地</th>
                <th>出発時刻</th>
                <th>到着時刻</th>
            </tr>
            @foreach ($diagrams as $diagram)
                <td>{{$diagram->name}}</td>
                <td>{{$diagram->departure}}</td>
                <td>{{$diagram->departure_time}}</td>
                <td>{{$diagram->arrival}}</td>
                <td>{{$diagram->arrival_time}}</td>
            @endforeach
        </table>
        @foreach ($diagrams as $diagram)
            <p>到着地{{$diagram->arrival}}</p>
        @endforeach
    </body>

</html>



