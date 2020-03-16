<?php

declare(strict_types=1);

/**
 * Class Human
 */
class Human
{
    private const NUMBER_OF_LEGS = 2;
    private const NUMBER_OF_HANDS = 2;

    /**
     * @param string $words
     */
    public function say(string $words): void
    {
        echo 'I want to talk something! ';
        echo $words . '<br>' . '<hr>';
    }

    protected function think(): void
    {
        echo 'I think, what I need to say and how! ';
        echo 'I have ' . self::NUMBER_OF_LEGS . ' legs ' . ' and ' . self::NUMBER_OF_HANDS
            . ' hands' . '. I can make everything!' . '<br>' . '<br>';
    }

}

/**
 * Class SmartHuman
 */
class SmartHuman extends Human
{
    /**
     * @param string $words
     */
    public function say(string $words): void
    {
        $this->think();
        parent::say($words);
    }
}

/**
 * Class StupidHuman
 */
class StupidHuman extends Human
{
    public function say(string $words): void
    {
        echo 'I want to talk something! ' . $words . '<br>' . '<hr>';
    }

    protected function think(): void
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

/**
 * Class Dog
 */
class Dog
{
    private const NUMBER_OF_PAWS = 4;

    public function bark(): void
    {
        echo '<br>' . '<hr>';
        echo 'Gav, gav! ' . 'I have ' . self::NUMBER_OF_PAWS . ' paws! ' . '<hr>';
    }

    public function sleep(): void
    {
        echo 'I am sleep right now';
        echo '<br>' . '<hr>';
    }
}

/**
 * Class GoodDog
 */
class GoodDog extends Dog
{
    /**
     * @param bool $strangerAtHome
     */
    public function bark(bool $strangerAtHome = true): void
    {
        echo '<br>' . '<hr>';
        echo 'Strangers at home - ' . $strangerAtHome . '<br>';
        if ($strangerAtHome) {
            echo 'Gav, gav';
        }
    }

    public function playWithChildren(): void
    {
        echo '<br>' . 'I like play with a small owners';
    }
}

/**
 * Class BadDog
 */
class BadDog extends GoodDog
{
    /**
     * @param bool $strangerAtHome
     */
    public function bark(bool $strangerAtHome = true): void
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