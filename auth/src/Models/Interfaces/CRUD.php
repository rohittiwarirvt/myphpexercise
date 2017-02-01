<?php

namespace RohitAuth\Models\Interfaces;

interface CRUD 
{
	public function create ($data);

	public function findBy($options);


	public function update($id, $data);


	public function delete($id);

}