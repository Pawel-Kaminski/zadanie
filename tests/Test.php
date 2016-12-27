<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Controller;

class Test extends TestCase
{
    /// Inserts a value and presses the button. Test is passed when there is no error.
    public function testInsertValue()
    { 
        $this->visit('/')
                ->type('1', 'number')
                ->press('send')
                ->dontSee('Whoops, looks like something went wrong.');
    }
    
    /// Checks if the function checkDivisibility returns proper strings for numbers from 1 to 100.
    public function testCheckDivisibility()
    {
        for ($i = 1; $i <= 100; $i++)
        {
            if($i % 15 === 0)
            {
                $this->assertEquals('fizzbuzz',
                        Controller::checkDivisibility($i));
            }
            elseif($i % 3 === 0)
            {
                $this->assertEquals('fizz',
                        Controller::checkDivisibility($i));
            }
            elseif($i % 5 === 0)
            {
                $this->assertEquals('buzz',
                        Controller::checkDivisibility($i));
            }
            else
            {
                $this->assertEquals('',
                        Controller::checkDivisibility($i));
            }
        }
    }
}
