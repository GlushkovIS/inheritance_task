<?php

declare(strict_types=1);

class Human
{
    private const NUMBER_OF_LEGS = 2;
    private const NUMBER_OF_HANDS = 2;

    public function say(string $words)
    {
        echo 'I want to talk something! ';
        echo $words . '<br>' . '<hr>';
    }

    protected function think()
    {
        echo 'I think, what I need to say and how! ';
        echo 'I have ' . self::NUMBER_OF_LEGS . ' legs ' . ' and ' . self::NUMBER_OF_HANDS
            . ' hands' . '. I can make everything!' . '<br>' . '<br>';
    }

}

class SmartHuman extends Human
{
    public function say(string $words)
    {
        $this->think();
        echo 'I want to talk something! ';
        echo $words . '<br>' . '<hr>';
    }
}

class StupidHuman extends Human
{
    public function say(string $words)
    {
        echo 'I want to talk something! ' . $words . '<br>' . '<hr>';
    }

    protected function think()
    {
    }
}

$human = new Human();
$smartHuman = new SmartHuman();
$stupidHuman = new StupidHuman();

echo 'Human' . '<br>' . '<hr>';
$human->say('I am human!');
echo 'Smart human' . '<br>' . '<hr>';
$smartHuman->say('I am smart human!');
echo 'Stupid human' . '<br>' . '<hr>';
$stupidHuman->say('I am stupid human!');


class Dog
{
    private const NUMBER_OF_PAWS = 4;

    public function bark()
    {
        echo '<br>' . '<hr>';
        echo 'Gav, gav! ' . 'I have ' . self::NUMBER_OF_PAWS . ' paws! ' . '<hr>';
    }

    public function sleep()
    {
        echo 'I am sleep right now';
        echo '<br>' . '<hr>';
    }
}

class GoodDog extends Dog
{

    public function bark(bool $strangerAtHome = true)
    {
        echo '<br>' . '<hr>';
        echo 'Strangers at home - ' . $strangerAtHome . '<br>';
        if ($strangerAtHome) {
            echo 'Gav, gav';
        }
    }

    public function playWithChildren()
    {
        echo '<br>' . 'I like play with a small owners';
    }
}

class BadDog extends GoodDog
{
    public function bark(bool $strangerAtHome = true)
    {
        echo '<br>' . '<hr>';
        echo 'Strangers at home - ' . $strangerAtHome . '<br>';
        if ($strangerAtHome) {
            parent::sleep();
        }
    }
}


$dog = new Dog();
$badDog = new BadDog();
$goodDog = new GoodDog();

echo 'Dog';
$dog->bark();
echo '<br>' . 'Bad dog';
$badDog->bark(true);
echo '<br>' . 'Good dog';
$goodDog->bark(true);
$goodDog->playWithChildren();