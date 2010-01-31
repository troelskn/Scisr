<?php
require_once 'PHPUnit/Framework.php';
require_once '../Scisr.php';

class Scisr_TestCase extends PHPUnit_Framework_TestCase
{

    public function setUp() {
        Scisr_Db::clearDb();
    }

    public function tearDown() {
        Scisr_Db::clearDb();
    }

}
