<?php

namespace Edcs\Reconciler\Macros\Banking;

class LloydsBusinessBanking extends BankingMacro
{
    public function login()
    {
        $this->browser->visit('https://onlinebusiness.lloydsbank.co.uk/business/logon/login.jsp')
                      ->assertSee('Welcome to Online for Business')
                      ->type('#frmLogin:strCustomerLogin_userID', env('LLOYDS_USERNAME'))
                      ->type('#frmLogin:strCustomerLogin_pwd', env('LLOYDS_PASSWORD'))
                      ->click('#frmLogin:btnLogin2')
                      ->assertSee('How would you like to log on?');
    }
}
