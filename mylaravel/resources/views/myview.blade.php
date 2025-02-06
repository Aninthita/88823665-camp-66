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
            background-color: #f5f5f5;
            margin-top: 50px;
            color: #4e4e4e;
        }

        h1 {
            text-align: center;
            font-weight: 700;
            color: #4b3d3d;
            margin-bottom: 30px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #5e4b4b;
        }

        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 12px;
            text-align: center;
            font-size: 16px;
        }

        table th {
            background-color: #6f4e37;
            color: white;
            font-size: 18px;
            padding: 12px;
        }

        table tr:nth-child(even) {
            background-color: #f2e6e2;
        }

        table tr:nth-child(odd) {
            background-color: #fdf2f0;
        }

        button {
            background-color: #6f4e37;
            border: none;
            padding: 10px 20px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4a3629;
        }

        .btn-primary:focus {
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>ตารางสูตรคูณ</h1>
        <form method="post" action="{{ url('/mycontroller') }}">
            @csrf
            <div class="mb-4">
                <label for="myinput" class="form-label"><b>กรอกตัวเลข</b></label>
                <input type="number" name="myinput" id="myinput" class="form-control" placeholder="กรอกตัวเลข" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(isset($number))
        <h2 class="mt-5"><b>ตารางสูตรคูณแม่ {{ $number }}</b></h2>
        <div class="table-container">
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
        </div>
        @endif
    </div>
</body>
</html>
