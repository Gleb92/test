<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?
    $array = [];
    for ($i = 0; $i <= 20; $i++) {
        $chuslo = rand(-10, 10);
        $array[] = $chuslo;
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    function cocktailSorting(&$a)
    {
        $n = count($a);
        $left = 0;
        $right = $n - 1;
        do {
            for ($i = $left; $i < $right; $i++) {
                if ($a[$i] > $a[$i + 1]) {
                    list($a[$i], $a[$i + 1]) = array($a[$i + 1], $a[$i]);
                }
            }
            $right--;
            for ($i = $right; $i > $left; $i--) {
                if ($a[$i] < $a[$i - 1]) {
                    list($a[$i], $a[$i - 1]) = array($a[$i - 1], $a[$i]);
                }
            }
            $left++;
        } while ($left <= $right);
    }
    /*echo "<pre>";
cocktailSorting($array);

echo "</pre>";*/
    function Perebor(&$r)
    {
        $n = count($r);
        $left = 0;
        $i = 0;
        do {
            for ($i; $i < $n; $i++) {
                for ($k = $i + 1; $k < $n; $k++) {
                    if ($r[$i] != $r[$k]) {
                    } elseif ($r[$i] == $r[$i + 1]) {
                        $r[$i] = $r[$i + 1];
                    } else {
                        list($r[$i + 1], $r[$k]) = array($r[$k], $r[$i + 1]);
                    }
                }
            }
            $left++;
        } while ($left < $n);
    }

    function test(&$d)
    {
        $count_elements = count($d);
        $iterations = $count_elements - 1;

        for ($i = 0; $i < $count_elements; $i++) {
            $changes = false;
            for ($j = 0; $j < $iterations; $j++) {
                if ($d[$j] == $d[($j + 1)]) {
                    $changes = true;
                    list($d[$j], $d[($j + 1)]) = array($d[($j + 1)], $d[$j]);
                }
            }
            $iterations--;
            if (!$changes) {
                return $d;
            }
        }
        return $d;
    }

    echo "<pre>";
    Perebor($array);
    print_r($array);
    echo "</pre>";
    /*list($array[1], $array[2]) = array($array[2], $array[1]);
print_r($array);*/
    echo "<pre>";
    Sort($array);
    print_r($array);
    echo "</pre>";
    ?>

</body>"

</html>