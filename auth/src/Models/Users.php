<?php

namespace RohitAuth\Models;

use RohitAuth\Models\Interfaces\CRUDAbstract;

class Users extends CRUDAbstract
{

	protected $table_name ="users";
	protected $fillable = array('username','email','password');

}