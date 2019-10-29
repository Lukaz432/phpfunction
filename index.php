<?php

//--------------------------//

function lyginisNelyginis($skaicius)
{
    if ($skaicius % 2 == 0) {
        print ' Lyginis ';
    } else {
        print ' Nelyginis ';
    }
}

lyginisNelyginis(2);
lyginisNelyginis(3);

//--------------------------//

function saknis($skaicius)
{
    print sqrt($skaicius);
}

saknis(9);
//--------------------------//


function wordsfunction($text)
{
    $badWords = ['Velnias', 'blemba', 'sudas', 'asilas', 'gaidys'];
    foreach ($badWords as $badword) {
        $text = str_replace($badword, '***', $text);
    }

    return $text;
}

print wordsfunction('Velnias blemba kazkoks asilas sudas gaidys ne taip');


//--------------------------//

class animal
{
    public $earlength = 10;
    public $type = '';
    public $region = '';

    public function __construct($earlength, $type, $region)
    {
        $this->earlength = $earlength;
        $this->type = $type;
        $this->region = $region;
    }

    public function voice()
    {
        print "My ear length is $this->earlength type:
        $this->type and I am from region $this->region";
    }
}

$pigeon = new animal(3, "bird", "eastern europe");

print $pigeon->voice();


//--------------------------//

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