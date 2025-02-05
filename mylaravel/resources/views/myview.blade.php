<!DOCTYPE html>
<langhg="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- ฟ้อนท์ --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- ตกแต่ง --}}
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f2e5e5; /* Soft pastel pink */
            color: #5c5c5c; /* Neutral text color */
        }
    
        .content {
            border-radius: 40px;
            background-color: #aec6cf; /* Pastel blue */
            padding: 20px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
        }
    
        button {
            color: #ffffff;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s ease-in-out;
        }
    
        .btn-success {
            background-color: #77dd77; /* Pastel green */
        }
    
        .btn-success:hover {
            background-color: #99e6a9; /* Lighter pastel green */
        }
    
        .btn-success:active {
            background-color: #66cdaa !important; /* Deeper pastel green */
        }
    </style>
    
        </body>
            <div class="container mt-5">
        <h1>ตารางแม่สูตรคูณ</h1>

        <form action="{{ url('/mycontroller') }}"  method="post">
        @csrf
            <div class="mb-3">
            <input type="text" name="myinput">

            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit" >สร้างตารางสูตรคูณ</button>
            </div>
        </form>

        <div class="mt-4">
            <?php

            if (isset($_POST['myinput']) != null) {
                $myvar = (int)$_POST['myinput'];
                echo "<h3>ตารางสูตรคูณของแม่ $myvar</h3>";
                echo "<ul class='list-group'>";

                for ($i = 1; $i <= 12; $i++) {
                    $ans = $myvar * $i;
                    echo "<li class='list-group-item'>$myvar x $i = $ans</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
        </body>
    </head>
</html>
