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
        }
        $c = substr($base, 0, $long_text);
        $div = $d;
        $ending = (substr($base, 0, $div) . '<a href=link.php?link= ' . $type_link . '>' . substr($c, $div) . '...' . '</a>');

        return $ending;
    }

    $b = obrez($a, $link);
    echo $b;


    function obrez2(&$base, $type_link, $long_text = 180, $last_word = 3)
    {
        $long_text = 180;
        $str = " ";
        $b = substr($base, 0, $long_text);
        $mas = (explode(' ', $b));
        $arr = " ";
        $arr_end = " ";
        for ($i = 0; $i < count($mas) - $last_word; $i++) {
            $arr .= $mas[$i] . " ";
        }
        for ($j = count($mas) - $last_word; $j < count($mas); $j++) {
            $arr_end .= $mas[$j] . " ";
        }

        $ending = ($arr . '<a href=link.php?link= ' . $type_link . '>' . $arr_end . '...' . '</a>');

        return $ending;
    }
    $b1 = obrez2($a, $link);
    echo $b1;





    ?> </body>

</html>