<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email): void
    {
        var_dump('Subscribing with CampaignMonitor.');

    }
}

class Drip implements Newsletter
{
    public function subscribe($email): void
    {
        var_dump('Subscribing with Drip.');
    }
}

class NewsLettersSubscriptionController
{
    public function store(Newsletter $newsletter): void
    {
        $newsletter->subscribe('joe@gmail.com');
    }
}

$controller = new NewsLettersSubscriptionController();
$controller->store(new CampaignMonitor('api_key'));
$controller->store(new Drip('api_key'));
