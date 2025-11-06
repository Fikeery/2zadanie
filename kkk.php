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
            // Будет реализовано в ветке feat/input-numbers
            echo "Функция ввода чисел пока не реализована.\n";
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
            // Возведение в степень — feat/power
            echo "Возведение в степень пока не реализовано.\n";
            break;
        case '0':
            echo "Выход.\n";
            exit(0);
        default:
            echo "Неверный выбор.\n";
    }
}