<?php
//1) У вас есть массив. Необходимо отсортировать его по PRICE
$array = [

   'SKLAD1' => [

       'EDA' => [

           'TOVAR1' => [

               'NAME' => '....',

               'PRICE' => 1234
           ],
           'TOVAR2' => [

               'NAME' => '....',

               'PRICE' => 1234
           ],

       ],

       'NAPITKI' => [

           'TOVAR55' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

           'TOVAR54' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

       ],

   ],

   'SKLAD2' => [

       'EDA' => [

           'TOVAR66' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

           'TOVAR67' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

       ],

       'NAPITKI' => [

           'TOVAR77' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

           'TOVAR78' => [

               'NAME' => '....',

               'PRICE' => 1234

           ],

       ],

   ],

];

    $array_name = [];

    foreach ($array as $key => $row)
    {
        $array_name[$key] = $row;

    }

        array_multisort($array_name, SORT_DESC  , $array);

?>
<pre>
    <?php
    /*
        print_r($array);
    */
    print_r($array);
    ?>
</pre>
