<?php

//Задача: По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

//Функция для переворота числа
function reverseNumb(int $naturalNum): int
{
    $m = 0; //Будущее перевернутое число
    while ($naturalNum>0) {
        $m*=10;
        $m+=$naturalNum%10;
        $naturalNum = (int)($naturalNum/10);
    }
    return $m;
}

$n=1223452323; //Натуральное число

echo reverseNumb($n);
