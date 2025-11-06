<?php

$number1 = null;
$number2 = null;

function showMenu() {
    echo "\n--- Калькулятор ---\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "0. Выход\n";
    echo "Выберите пункт меню: ";
}

while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
case '1':
    echo "Введите первое число: ";
    $input1 = trim(fgets(STDIN));
    echo "Введите второе число: ";
    $input2 = trim(fgets(STDIN));

    if (is_numeric($input1) && is_numeric($input2)) {
        $number1 = (float)$input1;
        $number2 = (float)$input2;
        echo "Числа сохранены: $number1 и $number2\n";
    } else {
        echo "Ошибка: оба значения должны быть числами!\n";
    }
    break;
        case '2':
            // Сложение — feat/addition
            echo "Сложение пока не реализовано.\n";
            break;
        case '3':
            // Вычитание — feat/subtraction
            echo "Вычитание пока не реализовано.\n";
            break;
        case '4':
            // Деление — feat/division
            echo "Деление пока не реализовано.\n";
            break;
case '5':
    echo "Введите число (основание): ";
    $base = trim(fgets(STDIN));
    echo "Введите степень: ";
    $exp = trim(fgets(STDIN));

    if (!is_numeric($base) || !is_numeric($exp)) {
        echo "Ошибка: оба значения должны быть числами!\n";
    } else {
        $result = pow((float)$base, (float)$exp);
        echo "Результат: $base ^ $exp = $result\n";
    }
    break;
        case '0':
            echo "Выход.\n";
            exit(0);
        default:
            echo "Неверный выбор.\n";
    }
}