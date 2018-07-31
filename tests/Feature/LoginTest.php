<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class LoginTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->user = factory('App\User')->create();
    }

    /** @test */
    public function a_user_can_successfully_log_in()
    {
        $this->visit('/login');
        $this->type($this->user->email, 'email');
        $this->type($this->user->password, 'password');
        $this->press('Login To Your Account');
        $this->seeStatusCode(200);
    }

    /** @test */
    public function a_user_receives_error_for_wrong_login_credentials()
    {
        $this->visit(route('login'));
        $this->type($this->user->email, 'email');
        $this->type('wrong-password', 'password');
        $this->press('Login');
        $this->see('These credentials do not match our records.');
    }

}
