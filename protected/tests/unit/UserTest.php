<?php

class UserTest extends CDbTestCase
{
    private $valid = array(
        'username' => 'testuser01',
        'email' => 'testuser01@email.com',
        'password' => '123456',
        'password_repeat' => '123456'
    );

    protected $fixtures = array(
        'users' => ':o_users'
    );

    public function testSignUpWithValidData()
    {
        $user = new User;
        $user->attributes = $this->valid;
        $this->assertTrue($user->save());

        $user = User::model()->findByPk($user->id);
        $this->assertEquals($this->valid['username'], $user->username, 'username not equal');
        $this->assertEquals($this->valid['email'], $user->email, 'email not equal');
        $this->assertNotEquals('', $user->salt, 'Salt is empty');
        $this->assertNotEquals('', $user->crypted_password, 'Crypted password is empty');
    }

    public function testSignUpWithEmptyUsername()
    {
        $user = new User;
        $invalid = $this->valid;
        $invalid['username'] = '';
        $user->attributes = $invalid;
        $this->assertFalse($user->save());
    }

    public function testSignUpWithEmptyEmail()
    {
        $user = new User;
        $invalid = $this->valid;
        $invalid['email'] = '';
        $user->attributes = $invalid;
        $this->assertFalse($user->save());
    }

    public function testSignUpWithEmptyPassword()
    {
        $user = new User;
        $invalid = $this->valid;
        $invalid['password'] = '';
        $user->attributes = $invalid;
        $this->assertFalse($user->save());
    }

    public function testSignUpWithWrongEmail()
    {
        $user = new User;
        $invalid = $this->valid;
        $invalid['email'] = 'wrong email';
        $user->attributes = $invalid;
        $this->assertFalse($user->save());
    }

    public function testSignUpWithNonUniqueUsernameOrEmail()
    {
        $user = new User;
        $invalid = $this->valid;
        $user->attributes = $invalid;
        $user->save();

        $invalid = $this->valid;
        $invalid['username'] = 'unique';

        $user = new User;
        $user->attributes = $invalid;
        $this->assertFalse($user->save(), 'Email must be unique');

        $invalid = $this->valid;
        $invalid['email'] = 'unique@email.com';

        $user = new User;
        $user->attributes = $invalid;
        $this->assertFalse($user->save(), 'Username must be unique');
    }

    public function testSignUpWrongConfirmation()
    {
        $user = new User;
        $invalid = $this->valid;
        $invalid['password_repeat'] = '123';
        $user->attributes = $invalid;
        $this->assertFalse($user->save());
    }
}