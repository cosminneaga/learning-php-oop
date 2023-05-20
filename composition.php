<?php

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class Subscription
{

    public function __construct(protected Gateway $gateway)
    {
        //
    }

    public function create()
    {

    }

    public function cancel(): void
    {
        $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {

    }
}

class Stripe implements Gateway
{

    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

class BrainTree implements Gateway
{

    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

$subscription = new Subscription(new Stripe());
$subscription2 = new Subscription(new BrainTree());