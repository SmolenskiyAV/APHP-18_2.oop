<?php

declare(strict_types=1);

echo '### Task 2 ###' . PHP_EOL;
use Objects\Humans as Human;

$employee[] = new Human\Director(50, 'Алексей', 'Миллер');
$employee[] = new Human\Manager(40, 'Герман', 'Греф');
$employee[] = new Human\Developer(30, 'Джон', 'До');
$employee[] = new Human\Tester(30, 'Эльвира', 'Набиуллина');

$numberOfEmployeers = 0;
$sumPayment = 0;

foreach ( $employee as $person ) {

    echo '===========================================';
    echo(PHP_EOL);
    $person->setDepartment('Школа программирования.');
    echo 'Учебное заведение - ' . ($person->getDepartmentName()) . PHP_EOL;

    if ($person instanceof Human\Employee) {

        echo 'Сотрудник: ' . ($person->name) . ' ' . ($person->surname). '. Возраст: ' . ($person->age) . ' лет.' . PHP_EOL;
        echo 'Должность: ' . ($person::getPost()) . PHP_EOL;
        echo 'Специальность: ' . ($person::getSpecialization()) . PHP_EOL;
        echo 'Зарплата: ' . ($person::getPayment()). ' руб.' . PHP_EOL;
        echo PHP_EOL;
        $sumPayment +=  $person::getPayment();
    }
    $numberOfEmployeers++;
}

echo '-------------' . PHP_EOL;
echo 'Штат: ' . ($numberOfEmployeers) . ' человек(а).'. PHP_EOL;
echo 'Зарплатный фонд (ВСЕГО): ' . ($sumPayment) . ' руб.'. PHP_EOL;
echo '#### END of Task 2 ###' . PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


echo '### Task 3 ###' . PHP_EOL;

class MyException extends Exception { }


class Test {
    public function calculate(mixed $value): void
    {
        try {

            switch (gettype($value)) {
                case 'boolean':
                    throw new MyException('bool — булево значение');
                    break;

                case "integer":
                    throw new MyException('int — число');
                    break;

                case "double":
                    throw new MyException('float — число');
                    break;

                case "string":
                    throw new MyException('string — строка');
                    break;

                case "array":
                    throw new MyException('array — массив');
                    break;

                case "object":
                    throw new MyException('object — объект');
                    break;
            }

        } catch (MyException $e) {
            echo PHP_EOL . $e->getMessage(), "\n";
        }
    }
}

$foo = new Test;

$value = $foo;

$foo->calculate($value);

echo 'Программа завершена' . PHP_EOL;
