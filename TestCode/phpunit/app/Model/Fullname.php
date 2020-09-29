<?php
namespace app\Model;
class Fullname
{
public $last_name;
public $first_name;
public function getFullName()
{
return  "$this->first_name $this->last_name";
}

}