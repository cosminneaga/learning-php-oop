<?php


/**
 * @throws Exception
 */
function add($a, $b): float
{
    if (!is_float($a) || !is_float($b)) {
        throw new InvalidArgumentException('These are not floats.');
    }

    return $a + $b;
}

try {
    var_dump(add(2, 2));
    var_dump(add(2, [1, 2]));
} catch (Exception $e) {
    var_dump($e->getMessage());
}


class Video
{

}

class User
{
    public function download(Video $video): void
    {
        if (!$this->subscribed()) {
            throw new InvalidArgumentException();
        }
    }

    public function subscribed(): bool
    {
        return false;
    }
}

(new User())->download(new Video);


class TeamException extends Exception
{
    public static function fromTooManyMembers(): static
    {
        return new static('You cannot add more than 3 members.');
    }
}

class Member
{
    public function __construct(public $name)
    {

    }
}

class Team
{
    protected array $members = [];

    /**
     * @throws Exception
     */
    public function add(Member $member): void
    {
        if (count($this->members) >= 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function getMembers(): array
    {
        return $this->members;
    }
}


class TeamMembersController
{
    public function store(): void
    {
        $team = new Team; // has a maximum of 3 members.

        try {
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Jane Doe'));

            var_dump($team->getMembers());
        } catch (TeamException $e) {
            var_dump($e->getMessage());
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

(new TeamMembersController())->store();


