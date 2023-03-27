<?php   

//array indexed atau numeric array

$list = array('Apple','Mango','Banana','Watermelon');
$leng = count($list);

$array[0] = 'Apple';
$array[1] = 'Mango';
$array[2] = 'Banana';
$array[3] = 'Watermelon';

//array associative array

$list1 = array('buah1' => 'apple', 'buah2' => 'mango', 'buah3' => 'banana','buah4' => 'watermelon');

//array multidimensional array

$list2 = array(
    array('Apple','5','5.000'),
    array('Mango','10','7.000'),
    array('Banana','5','10.000'),
    array('Watermelon','4','15.000')
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Arrya</title>
</head>
<body>

<?php 

echo "<h1>Array Numeric</h1>";
for ($i=0; $i <= $leng ; $i++) { 
    echo $list[$i];
    echo "<br/>";
}

echo "<h1>Array Associative</h1>";

    echo $list1[buah1];
    echo $list1[buah2];
    echo $list1[buah3];
    echo $list1[buah4];


echo "<h1>Array Multidimensional</h1>";

    echo "Nama Buah: ", $list2[0][0] . "<br/>", "Stock : ", $list2[0][1] . "<br/>", "Harga: ", $list2[0][2];

   
?>


    
</body>
</html>

