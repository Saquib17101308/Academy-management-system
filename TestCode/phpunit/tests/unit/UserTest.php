<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetTheFirstName()
{
$user=new \App\Model\User;
$user->setFirstName('Saquib');
$this->assertEquals($user->getFirstName(), 'Saquib');
}
}