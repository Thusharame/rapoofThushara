<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3: Forms, Tables & PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Exercises</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="ex1.php">Exercise 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="ex2.php">Exercise 2</a></li>
                        <li class="nav-item"><a class="nav-link active" href="ex3.php">Exercise 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <h1 class="mb-4">Exercise 3</h1>

     
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">User Form</div>
            <div class="card-body">
                <form method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Firstname:</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Lastname:</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $first = htmlspecialchars($_POST['firstname']);
                    $last = htmlspecialchars($_POST['lastname']);
                    echo "<div class='alert alert-success mt-3'><h3>Hello $first $last, You are welcome to my site.</h3></div>";
                }
                ?>
            </div>
        </div>

      
        <div class="card mb-4">
            <div class="card-header bg-success text-white">Student Records</div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr><th>Firstname</th><th>Lastname</th><th>Subject</th><th>Grade</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>John</td><td>Doe</td><td>Math</td><td>A</td></tr>
                        <tr><td>Jane</td><td>Smith</td><td>Science</td><td>B+</td></tr>
                        <tr><td>Bob</td><td>Johnson</td><td>History</td><td>A-</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

      
        <div class="card mb-4">
            <div class="card-header bg-info text-white">String Variables</div>
            <div class="card-body">
                <?php
                $str1 = "Hello";
                $str2 = "World";
                $combined = "$str1 $str2";
                echo "<p><strong>String:</strong> $combined</p>";
                echo "<p><strong>Length:</strong> " . strlen($combined) . " characters</p>";
                ?>
            </div>
        </div>

      
        <div class="card mb-4">
            <div class="card-header bg-warning">Number Addition</div>
            <div class="card-body">
                <?php
                $num1 = 298;
                $num2 = 234;
                $num3 = 46;
                $total = $num1 + $num2 + $num3;
                echo "<p><strong>298 + 234 + 46 = $total</strong></p>";
                ?>
            </div>
        </div>

   
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">Browser Detection</div>
            <div class="card-body">
                <?php
                $agent = $_SERVER['HTTP_USER_AGENT'];
                if (strpos($agent, 'Edg')) $browser = 'Edge';
                elseif (strpos($agent, 'Chrome')) $browser = 'Chrome';
                elseif (strpos($agent, 'Firefox')) $browser = 'Firefox';
                elseif (strpos($agent, 'Safari')) $browser = 'Safari';
                else $browser = 'Unknown';
                echo "<p><strong>Browser:</strong> $browser</p>";
                ?>
            </div>
        </div>
    </div>

    
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <div class="container">
            <?php
            $file = basename($_SERVER['PHP_SELF']);
            $modified = date("F d Y H:i:s", filemtime(__FILE__));
            echo "<p class='mb-0'>$file | Last modified: $modified</p>";
            ?>
        </div>
    </footer>
   
</body>
</html>