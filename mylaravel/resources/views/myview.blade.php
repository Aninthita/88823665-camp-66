<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "K2D", sans-serif;
            background-color: #fff5ed;
            margin-top: 25px;
        }

        h1 {
            text-align: center;
            font-weight: 700;
            font-style: normal;
            color: #695A5b;
        }
        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 25px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
        }
        table td {
            padding: 10px;
            text-align: left;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>
</head>
<body>
    <div class="container mt-5">
        <h1>ตารางสูตรคูณ</h1>
        <form method="post" action="{{ url('/mycontroller') }}">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label"><b>กรอกตัวเลข</b></label>
                <input type="number" name="myinput" id="myinput" class="form-control" placeholder="กรอกตัวเลข" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(isset($number))
        <h2 class="mt-4"><b>ตารางสูตรคูณแม่ {{ $number }}</b></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><b>สูตรคูณ</b></th>
                    <th><b>ผลลัพธ์</b></th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 12; $i++)
                <tr>
                    <td>{{ $number }} x {{ $i }}</td>
                    <td>{{ $number * $i }}</td>
                </tr>
                @endfor
            </tbody>
        </table>
        @endif
    </div>
</body>
</html>
