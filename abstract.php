<?php

abstract class AchievementType
{
    public function name(): string
    {
        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints = First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon(): string
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier(string $user): string;
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user): string
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user): string
    {

    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier(string $user): string
    {
        return $user;
    }
}

//$achievement = new AchievementType();
//
//var_dump($achievement->name());
//var_dump($achievement->icon());

$firstThousandPoints = new FirstThousandPoints();

var_dump($firstThousandPoints->name());
var_dump($firstThousandPoints->icon());

$firstBestAnswer = new FirstBestAnswer();

var_dump($firstBestAnswer->name());
var_dump($firstBestAnswer->icon());

$reachTop50 = new ReachTop50();

var_dump($reachTop50->qualifier('Cosmin Neaga'));
