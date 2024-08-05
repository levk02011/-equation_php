<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function error()
    {
        echo "syntax ERROR";
    }

    function cquare($resa)
    {
        return sqrt($resa);
    }

    function rivnanya($a, $b, $c, $d)
    {
        if ($a == "x") {
            if ($b == "+") {
                $res = $d - $c;
            } elseif ($b == "-") {
                $res = $d + $c;
            } elseif ($b == "*") {
                $res = $d / $c;
            } elseif ($b == "/") {
                $res = $c * $d;
            } else {
                error();
                return;
            }
        } elseif ($c == "x") {
            if ($b == "+") {
                $res = $d - $a;
            } elseif ($b == "-") {
                $res = $d + $a;
            } elseif ($b == "*") {
                $res = $d / $a;
            } elseif ($b == "/") {
                $res = $a * $d;
            } else {
                error();
                return;
            }
        } elseif ($a == "x^2") {
            if ($b == "+") {
                $resa = $d - $c;
            } elseif ($b == "-") {
                $resa = $d + $c;
            } elseif ($b == "*") {
                $resa = $d / $c;
            } elseif ($b == "/") {
                $resa = $c * $d;
            } else {
                error();
                return;
            }
            $res = cquare($resa);
        } elseif ($c == "x^2") {
            if ($b == "+") {
                $resa = $d - $a;
            } elseif ($b == "-") {
                $resa = $d + $a;
            } elseif ($b == "*") {
                $resa = $d / $a;
            } elseif ($b == "/") {
                $resa = $a * $d;
            } else {
                error();
                return;
            }
            $res = cquare($resa);
        } else {
            error();
            return;
        }
        echo $res;
    }

    rivnanya("x^2", "-", 00, 25);
    ?>
</body>

</html>