<!DOCTYPE html>
<html>
<head>
    <title>Month Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="month">Enter a month:</label>
        <input type="text" id="month" name="month">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monthName = $_POST['month'];

    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'December':
            $days = 31;
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            $days = 30;
            break;
        case 'February':
            $days = 28;
            break;
        default:
            $days = 'invalid';
            break;
    }

    echo "Number of days in $monthName: $days";
}
?>


