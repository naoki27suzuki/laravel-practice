<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>Laravel実践入門</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>
<body>
<table class="table">
<thead>
<tr>
    <tr>ISBNコード</tr><tr>書名</tr><tr>価格</tr>
    <tr>出版社</tr><tr>刊行日</tr><tr>サンプル</tr>
</tr>
<thead>
<tbody>
    @foreach ($books as $book)
        <tr>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->published }}</td>
            <td>{{ $book->sample ? 'あり' : 'なし' }}</td>
        </tr>
    @endforeach
</tbody>
</table>
</body>
</html>
