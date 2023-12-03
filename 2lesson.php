<?php
//тз1
elif(8,16);

function elif(int $a, int $b): void
{
    if ($a > $b)
        {
        print_r("$a больше $b");}
    elseif ($b>$a)
        {
        print_r("$b больше $a");
    }
    else
        {
            print_r("$b = $a");
        }
}

//тз2
speedCheck(80);
function speedCheck(int $speed): void
{
    print_r(($speed <60) ? "\nСкорость нормальная" : "\nCкорость превышена");
}
typeOfSentense("сколько времени?");
function typeOfSentense($sentense): void
{
 $last = substr($sentense,-1);
 print_r(($last === '?') ? "\nвопросительное предложение" : "\nнормальное предложение");
}

//тз3
function dayOfWeek(int $num): string
{
    echo "\n";
    switch ($num) {
        case 1: return 'понедельник';
        case 2: return 'вторник';
        case 3: return 'среда';
        case 4: return 'четверг';
        case 5: return 'пятница';
        case 6: return 'суббота';
        case 7: return 'воскресенье';
    }
    return 'не является днем недели';
}

print_r(dayOfWeek(1));
print_r(dayOfWeek(10));

switchCase(5);
switchCase(15);
function switchCase (int $count): void
{
    echo "\n";
    switch ($count) {
        case 1:
            print_r($count+1);
            break;
        case 2:
            print_r($count+2);
            break;
        case 3:
            print_r($count+3);
            break;
        case 4:
            print_r($count+4);
            break;
        case 5:
            print_r($count+5);
            break;
        case 6:
            print_r($count+6);
            break;
        case 7:
            print_r($count+7);
            break;
        case 9:
            print_r($count+9);
            break;
        case 8:
            print_r($count+8);
            break;
        case 10:
            print_r($count+10);
            break;
        default:
            print_r("Значение выходит за область кейса");
    }
}

// тз 4

function sevenCheck (): void
{
    $count = 0;
    for ($i = 0; $i <=1000; $i++) {
        $num = strval($i);
        $numCount = substr_count($num,7);
        if ($numCount > 1){
            $count++;
        }

    }
    print_r("\nЦифра 7 более 1 раза встречается в диапазоне чисел от 0 до 1000: " .$count. "раз(а)");
}
sevenCheck();