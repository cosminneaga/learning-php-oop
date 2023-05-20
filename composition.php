<?php

interface Gateway
{
    public function findStripCustomer();
    public function findStripeSubscriptionByCustomer();
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
        $this->gateway->findStripeSubscriptionByCustomer();
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

    public function findStripCustomer()
    {

    }

    public function findStripeSubscriptionByCustomer()
    {

    }
}
