<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Tests;

class EncryptionTest extends TestCase
{
    /**@test*/
    public function testit_can_encrypt()
    {

        $string = 'foobar';
        $expectedOutput = "ullyzi";

        $result = (new Tests())->encrypt($string);

        $this->assertEquals($expectedOutput, $result);

    }
    /**@test*/
    public function testit_can_encrypt2()
    {

        $string = 'wizard';
        $expectedOutput = "draziw";

        $result = (new Tests())->encrypt($string);

        $this->assertEquals($expectedOutput, $result);
    }

    public function test_it_can_encrypt_keep_char_intact(){

        $string = '/r/dailyprogrammer';
        $expectedOutput = "/i/wzrobkiltiznnvi";

        $result = (new Tests())->encrypt($string);

        $this->assertEquals($expectedOutput, $result);
    }

    public function test_it_can_encrypt_entire_sentence(){

        $string = 'gsrh rh zm vcznkov lu gsv zgyzhs xrksvi';
        $expectedOutput = "this is an example of the atbash cipher";

        $result = (new Tests())->encrypt($string);

        $this->assertEquals($expectedOutput, $result);
    }
}
