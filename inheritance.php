<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a Latte');
    }
}

(new CoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brewLatte();


class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key): float|int
    {
        return array_sum(
            array_map(fn($item) => $item->$key, $this->items)
        );
    }
}

class VideosCollection extends Collection
{
    public function length(): float|int
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video', 120),
    new Video('Some Video', 145),
]);

var_dump($videos);

echo $videos->sum('length');
echo $videos->length();
