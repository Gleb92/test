<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $link = 123;
    //'<a class="btn btn-primary" href="link.php?link=' . $link . '">Lorem></a>';
    ?>
    <?php
    $a = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi porro recusandae veritatis in, sunt magni optio unde ullam, fuga quia dolore, dolorem aut hic expedita. Nulla quas error veritatis nostrum odit ipsam, perferendis corrupti doloribus ab saepe totam quidem suscipit tenetur labore minima voluptatibus assumenda iste dignissimos quam! 
     Numquam obcaecati, excepturi, sed et reiciendis aperiam dolor debitis voluptas vel non, autem quasi officia quisquam similique laudantium illo corrupti maxime iste quis sapiente doloribus eum? Natus, corrupti vero minus sequi iusto, assumenda expedita adipisci enim amet similique rem rerum eaque asperiores cupiditate et incidunt culpa illum? Velit consectetur aut beatae modi, dolorem fugiat eveniet, molestias quas ea eum ut dolore eaque distinctio ad excepturi voluptatibus est saepe voluptatem, perspiciatis porro facere! Ratione dolor, praesentium iure repudiandae ullam, accusamus ipsam officiis rerum fugiat temporibus nemo? Maiores velit esse iure quia eum ex consequuntur. Cupiditate architecto assumenda consequatur expedita cumque, voluptas voluptatum et distinctio. Nulla veritatis quisquam ipsa nisi exercitationem non aspernatur, aperiam consectetur ut sunt quibusdam, nihil adipisci asperiores voluptatum. Explicabo, aperiam assumenda! Blanditiis fugiat assumenda nulla et sint nihil, excepturi tempore dolore quia eos! Amet quam vel aut deleniti nesciunt accusamus, eius officia quia quos omnis pariatur ipsa aliquam, cumque assumenda.";
    function short($c)
    {
        for ($i = 0; $i < 180; $i++) {
            static $v;
            $v .= $c[$i];
        }


        return $v;
    }
    //$arr = [...$items];
    //echo $arr = short($a);
    //print_r($arr);
    //var_dump(short($a));
    //$g = iconv_strlen(short($a));
    //echo $g;

    function last_word($b)
    {
        $g = iconv_strlen(short($b));
        $y = 0;
        do {
            for ($j = $g; $j > 0; $j--) {
                if ($b[$j] == " ") {
                    $y++;
                }
                $r = $b[$j];
            }
        } while ($y < 3);
        return $r;
    }

    function teting($v)
    {
        $g = mb_strlen($v);
        $chet = 0;
        $aty = " ";
        do {
            for ($i = $g; $i > 0; $i--) {
                if ($v[$i] == $aty) {
                    $chet++;
                }
                static $ars;
                $ars .= $v[$i];
                if ($chet == 3) {
                    break;
                }
            }
        } while ($chet < 3);
        return  $ars;
    }
    //$b = substr($a, 0, 180) . "...";
    // function probl($base)
    //{
    /*
    $long_text = 180;
    $str = " ";
    $b = substr($a, 0, $long_text);

*/
    /*$long = strlen($b); //180
    $long_end = $long - strlen(strrchr($b, $str));
    echo $end = strlen(strrchr($b, $str));
    echo strlen(trim($b));
    $long1 = $long - $end;
    echo $c = substr($b, 0, $long1);
    echo $d = strlen(trim($c));
    echo $c = substr($c, 0, $d);
    echo $end = strlen(strrchr($c, $str));*/


    function obrez(&$base, $type_link, $long_text = 180, $last_word = 3)
    {
        $long_text = 180;
        $str = " ";
        $b = substr($base, 0, $long_text);
        $long_string = strlen($b); //180
        for ($i = 0; $i < $last_word; $i++) {
            static $end;
            $end += strlen(strrchr($b, $str));
            $front_string = $long_string - $end;
            $b = substr($base, 0, $front_string);
            $d = strlen(trim($b));
            $b = substr($base, 0, $d);
            //$long_string1 = strlen($b);
        }
        $c = substr($base, 0, $long_text);
        $div = $d;
        $ending = (substr($base, 0, $div) . '<a href="link.php?link=' . $type_link . '">' . substr($c, $div) . '...');
        '</a>';
        return $ending;
    }
    $b = substr($a, 0, 180);
    //echo $fa = substr($b, 0, 167) . substr($b, 167);

    echo obrez($a, $link);

    echo $a;


    //echo obrez($a);
    //echo substr($a, 0, 171);

    // strpbrk($b, $str);
    //echo strstr($b, $str);
    /*$c = strrchr($b, $str);
    echo $long = strlen($c);
    $long_text1 = 183 - $long;
    echo $q = substr($b, 0, $long_text1);
    $c = strrchr($q, $str);
    $ci = strlen($c);
    echo $long = strlen($q);
    $long_text1 = $long - $ci;
    echo $q = substr($b, 0, $long_text1);*/
    echo '<pre>';
    print_r(explode(' ', $a));
    echo '</pre>';











    ?> </body>

</html>