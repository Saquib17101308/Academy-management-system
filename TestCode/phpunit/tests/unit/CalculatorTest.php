<?php
class CalculatorTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetFirstName()
{
$user = new \App\Model\Calculator;
$user->first_name='Ahmed';
$this->assertEquals('Ahmed',$user->getName());
}
}