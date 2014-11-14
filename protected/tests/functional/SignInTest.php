<?php

class SigninTest extends WebTestCase
{
    protected $fixtures = array(
        'users' => ':o_users'
    );

    public function testLoginLogoutWithNewSignedUpUser()
    {
        $this->open('');
        // ensure the user is logged out
        if ($this->isTextPresent('Logout'))
            $this->clickAndWait('link=Logout (testuser01)');

        $this->open('signup');
        $this->assertElementPresent('css=#signup_form');
        $this->type('css=#User_username','testuser01');
        $this->type('css=#User_email','testuser01@email.com');
        $this->type('css=#User_password','123456');
        $this->type('css=#User_password_repeat','123456');
        $this->clickAtAndWait('css=#create_user_button');
        $this->assertTextPresent(Helpers::getSuccessSignupMessage());

        // test signin process by new testuser01
        $this->clickAndWait('link=Login');
        $this->assertElementPresent('name=LoginForm[username]');
        $this->type('name=LoginForm[username]','testuser01');
        $this->type('name=LoginForm[password]','123456');
        $this->clickAndWait("//input[@value='Login']");
        $this->assertTextPresent('Logout');
    }
}