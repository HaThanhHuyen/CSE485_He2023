<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];


$valueB = $a['b']['o']['b'];    


$valueC = $a['a']['c'];


$infoA = $a['a'];

echo "Giá trị có key là 'b' là: " . $valueB . "<br>";
echo "Giá trị có key là 'c' là: " . $valueC . "<br>";
echo "Thông tin của phần tử có key là 'a': ";
echo "" . ($infoA);
?>