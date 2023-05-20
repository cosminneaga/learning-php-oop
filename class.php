<?php

class Team
{

    protected $name;
    protected $members = [];

    public function __construct(string $name, array $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params): static
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add(string $name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

class Member {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Jon Does')
]);

$acme->add('More members');

var_dump($acme);
var_dump($acme->name());
var_dump($acme->members());
