<?php 

//--------------------------//

class animal
{
    public function voice()
    {
        return ' :zzz ';
    }
}
class human
{
    public function stroke($animal)
    {
        return "just stroked" . $animal->voice();
    }
}


$animal = new animal();
$human = new human();
print $human->stroke($animal);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="assets/js/bootstrap.js">
    <link rel="stylesheet" href="assets/js/jquery.js">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- script -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>