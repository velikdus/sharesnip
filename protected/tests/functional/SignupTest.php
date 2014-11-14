<?php

class SignupTest extends WebTestCase
{
    protected $fixtures = array(
        'users' => ':o_users'
    );

    public function testSignUpOnHomePage()
    {
        $this->open('/');
        $this->assertTextPresent('Signup');
    }

    public function testSuccessfulSignup()
    {
        $this->open('signup');
        $this->assertElementPresent('css=#signup_form');
        $this->type('css=#User_username','testuser01');
        $this->type('css=#User_email','testuser01@email.com');
        $this->type('css=#User_password','123456');
        $this->type('css=#User_password_repeat','123456');
        $this->clickAtAndWait('css=#create_user_button');
        $this->assertTextPresent(Helpers::getSuccessSignupMessage());
    }

    public function testUnsuccessfulSignup()
    {
        $this->open('signup');
        $this->assertElementPresent('css=#signup_form');
        $this->clickAndWait('css=#create_user_button');
        $this->assertElementPresent('css=#signup_form');
    }
}




