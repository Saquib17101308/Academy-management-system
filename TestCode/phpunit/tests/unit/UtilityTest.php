
<?php
class UtilityTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetThe()
{

$user = new \App\Model\Utility;
$_SESSION['uid']='';
$_COOKIE['uid']='';
$this->assertEquals(false,$user->check());
}
}