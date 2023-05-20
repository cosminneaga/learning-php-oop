<?php

// Validating data type using Value Objects
class Age
{
    public function __construct(private int $age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense.');
        }
    }

    public function increment(): Age
    {
//        $this->age += 1; // mutable
        return new self($this->age + 1); // immutable
    }

    public function get(): int
    {
        return $this->age;
    }
}

function register(string $name, Age $age): void
{
    var_dump($name . ' is ' . $age->get() . ' old.');
}

$age = new Age(25);
$age->increment();

register('John', $age);
//register('John', new Age(-25));
//register('John', new Age(500));

$age2 = new Age(32);
$age2 = $age2->increment();
register('Cosmin', $age2);


// Grouping data using Value Objects
class Coordinates
{
    public function __construct(public $x, public $y)
    {

    }
}

function pin(Coordinates $coordinates): void
{
    $x = $coordinates->x;
}

function distance(Coordinates $begin, Coordinates $end)
{

}