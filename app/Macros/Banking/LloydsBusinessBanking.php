<?php

namespace Edcs\Reconciler\Macros\Banking;

class LloydsBusinessBanking extends BankingMacro
{
    public function login()
    {
        $this->browser->visit('https://onlinebusiness.lloydsbank.co.uk/business/logon/login.jsp')
                      ->assertSee('Welcome to Online for Business');
    }
}
