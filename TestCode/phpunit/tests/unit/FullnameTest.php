<?php
class fullnameTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetTheFullName()
{
$user = new \App\Model\Fullname;
$user->first_name='Ahmed';
$user->last_name='Saquib';
$this->assertEquals('Ahmed Saquib',$user->getFullName());
}
}