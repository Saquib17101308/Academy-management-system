<?php
namespace app\Model;
class User
{
public $first_name;
public function setFirstName($firstName)
{
$this->first_name = $firstName;
}
public function getFirstName()
{
return 'Saquib';
}
}