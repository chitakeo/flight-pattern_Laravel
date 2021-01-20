<!DOCTYPE html>
<html long = "ja">
    <head>
        <meta charset='utf-8'>
        <title>flight pattern</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>ダイヤ自動生成サイト</h1>
        <p class = "lead">ダイヤを入力してください</p>
        <form method="#" action="#">
            <p> 便名
                <input name="textvalue" type="text">
            </p>
            <p> 出発空港
                <select name="deperture">
                    <option value="airport">札幌(新千歳)</option>
                    <option value="airport">東京(羽田)</option>
                    <option value="airport">東京(成田)</option>
                    <option value="airport">名古屋(中部)</option>
                    <option value="airport">大阪(伊丹)</option>
                    <option value="airport">大阪(関西)</option>
                    <option value="airport">神戸</option>
                    <option value="airport">福岡</option>
                    <option value="airport">那覇</option>
                </select>
            </p>
            <p> 到着空港
                <select name="arrive">
                    <option value="airport">札幌(新千歳)</option>
                    <option value="airport">東京(羽田)</option>
                    <option value="airport">東京(成田)</option>
                    <option value="airport">名古屋(中部)</option>
                    <option value="airport">大阪(伊丹)</option>
                    <option value="airport">大阪(関西)</option>
                    <option value="airport">神戸</option>
                    <option value="airport">福岡</option>
                    <option value="airport">那覇</option>
                </select>
            </p>
            <p> 出発時刻
                <select name="dep_time">
                    <option value="hour">8</option>
                    <option value="hour">9</option>
                    <option value="hour">10</option>
                    <option value="hour">11</option>
                    <option value="hour">12</option>
                    <option value="hour">13</option>
                    <option value="hour">14</option>
                    <option value="hour">15</option>
                    <option value="hour">16</option>
                    <option value="hour">17</option>
                    <option value="hour">18</option>
                </select>
                時
                <select name="dep_time">
                    <option value="minute">00</option>
                    <option value="minute">30</option>
                </select>
                分
            </p>
            <p> 到着時刻
                <select name="arrive_time">
                    <option value="hour">8</option>
                    <option value="hour">9</option>
                    <option value="hour">10</option>
                    <option value="hour">11</option>
                    <option value="hour">12</option>
                    <option value="hour">13</option>
                    <option value="hour">14</option>
                    <option value="hour">15</option>
                    <option value="hour">16</option>
                    <option value="hour">17</option>
                    <option value="hour">18</option>
                </select>
                時
                <select name="dep_time">
                    <option value="minute">00</option>
                    <option value="minute">30</option>
                </select>
                分
            </p>
            <p><input type="submit" value="入力"></p>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>

</html>