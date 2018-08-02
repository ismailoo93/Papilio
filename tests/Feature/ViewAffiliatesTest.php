<?php

namespace Tests\Feature;

use Tests\TestCase;



class ViewAffiliatesTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->affiliate = factory('App\Affiliate')->create();
    }

    /** @test */
    public function a_user_can_view_all_affiliates()
    {
        $this->get('/affiliates');
        $this->see($this->affiliate->name);

    }

    /** @test */
    public function a_user_can_view_a_specific_affiliate()
    {
        $this->get('/affiliates/'.$this->affiliate->id);
        $this->see($this->affiliate->name);
    }

}
