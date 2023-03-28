<?php
// 1. Написать функцию, которая принимает на вход два числа и возвращает их сумму
$firstNum = 4;
$secondNum = 8;
function sum($num1, $num2){
    return $num1 + $num2;
}
echo sum($firstNum, $secondNum);

// 2. Написать функцию, которая принимает на вход строку и возвращает ее длину
$string = 'привет, меня зовут Таня и я делаю дз';
function string_length($str){
    return strlen($str);
}
echo string_length($string);

// 3. Написать функцию, которая принимает на вход массив чисел и возвращает их среднее значение
$array = [1, 2, 3, 4, 5];
function array_average($arr) {
    return array_sum($arr)/count($arr);
}

echo array_average($array);

// 4. Написать функцию, которая принимает на вход два числа и определяет, какое из них больше
$minNum = 4;
$maxNum = 6;
function bigger_num($num1, $num2) {
    if($num1 > $num2){
        return $num1;
    } return $num2;
}
echo bigger_num($minNum, $maxNum);

// 5. Написать функцию, которая принимает на вход две строки и возвращает их объединение
$firstString = 'Напишите имя';
$secondString = 'и фамилию';
function concat_string($str1, $str2) {
    return $str1 . ' ' . $str2;
}
echo concat_string($firstString, $secondString);

// 6. Написать функцию, которая принимает на вход строку и возвращает ее в верхнем регистре
$lowerCaseString = 'the quick brown fox jumps over the lazy dog';
function to_upper_case($str) {
    return strtoupper($str);
}
echo to_upper_case($lowerCaseString);
// 7. Написать функцию, которая принимает на вход строку и определяет, содержит ли она подстроку
$longString = 'Ленивая коричневая лиса перепрыгнула через забор';
$shortString = 'пес';
function contain_subcstring($str, $subStr){
    if (str_contains($str, $subStr)){
        return 'содержит';
    } else {
        return 'не содержит';
    }
}
echo contain_subcstring($longString, $shortString);
// 8. Найти среднее арифметическое двух чисел
$firstNumber = 4;
$secondNumber = 8;

function numbers_average ($num1, $num2){
    return ($num1 + $num2) / 2;
}
echo numbers_average($firstNumber, $secondNumber);

// 9. Найти корень квадратный из числа
$number = 16;
function square_root($num) {
    return sqrt($num);
}
echo square_root($number);
?>