<?php

// Function which prints "Hello I am Eva"
function hello()
{
    echo 'Hello I am Eva<br>';
}

hello();
hello();
hello();

//Function with argument
function hello2($name)
{
   echo "Hello I am $name <br>";
}
hello2("rostand");
// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5);
echo sum(9,10);





























// Create function to sum all numbers using ...$nums
// function sum1(...$nums)
// {
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num;
//    return $sum;
// }
// echo sum1(1, 2, 3, 4, 6);

// Arrow functions
//function sum(...$nums)
//{
//    return array_reduce($nums, fn($carry, $n) => carry + $n);
//}
//echo sum(1, 2, 3, 4, 6);


