<?php

class Person
{
    public function __construct(public string $name)
    {

    }

    public function job(): string
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight(): string
    {
        return 'nightmares';
    }
}

$bob = new Person('Bob');
var_dump($bob->job());
var_dump($bob->thingsThatKeepUpAtNight());