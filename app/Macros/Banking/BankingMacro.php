<?php

namespace Edcs\Reconciler\Macros\Banking;

use Laravel\Dusk\Browser;

abstract class BankingMacro
{
    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }

    abstract public function login();
}
