<?php

namespace RohitAuth\Models\Interfaces;

use RohitAuth\Database\Connectivity\DatabaseConnection;

abstract class CRUDAbstract implements CRUDAbstract
{

	protected $db_connect, $fillable, $table_name;


	public function __construct()
	{
		$this->db_connect = DatabaseConnection::initConnection();
		$this->init();
	};


	protected function init()
	{
		$this->column_names =  "(" . implode(",", $this->fillable) . ")";
		$this->insertStmt = "UPDATE {$this->table_name} set {$set_values} where id=$id";
	    $this->insertStmt = "";
    	$this->deleteStmt = "DELETE from {$this->table_name} where id = $id";

	}


	public function executeQuery($stmt)
	{
		try {
      		$query = $this->db_connect->prepare($stmt);
    		//print $stmt;
      		$result = $query->execute();
	    }
    	catch(PDOException $e) {
    		echo  "<br>" . $e->getMessage();
    	}

    	return $result;
	}



  	public function mapColumnValue($data)
  	{
  		$colunm_values =  '('. implode(',', array_map(function($value) {
                              if(!is_numeric($value)) {
                                  return '"' . $value . '"';

                              } else {
                              return $value;
                              }
                      }, $data)) .')';
  		return $colunm_values;
  	}

  	public function getKeyValueForUpdate($data) 
  	{
	    $set_values ="";
    	foreach ($data as $column_name => $column_value) {
        	if(!is_numeric($column_value)) {
          	$column_value =  '"' . $column_value . '"';
        	}
      		$set_values .= "`$column_name`=$column_value,";
    	}
    	$set_values = rtrim($set_values, ',');

    	return $set_values;
  	}

    public function create(array $data)
  	{
  
  	  $column_values = $this->mapColumnValue($data);
  	  $stmt = "INSERT INTO {$this->table_name} {$this->column_names} VALUES {$column_values}";

  	  if ($result =$this->executeQuery($stmt) !== false) {
  	  	$lastInsertId = $this->db_connect->lastInsertId();
      	$result = $this->findBy(array('id' => $lastInsertId));
  	  }

  	}

  	public function update($id, $data)
  	{
  		$set_values = $this->getKeyValueForUpdate($data);
  		$stmt = "UPDATE {$this->table_name} set {$set_values} where id=$id"; 

  		if ($result =$this->executeQuery($stmt) !== false) {
  			return $result = "Updated Record Succesfully";
  		}
  	}

  	public function delete($id)
  	{

    	$stmt = "DELETE from {$this->table_name} where id = $id";
  		if ($result =$this->executeQuery($stmt) !== false) {
  			return $result = "Deleted Record Succesfully";
  		}
	}

	public findBy($options)
	{
		$and_or_select = false;
	    $first = isset($options['first']) ? true : false;

	    if ($first) {
	      unset($options['first']);
	    }

	    if (!isset($options['or'])|| !isset($options['and'])) {
	      $defaults = array_merge([], ['and' => $options]);
	    } else {
	      $and_or_select = true;
	    }

	    $stmt = "select * from {$this->table_name} where ";
	    if (!$and_or_select) {
	      foreach ($defaults['and'] as $key => $value) {
	        $stmt .= $key . '='. $value . ' AND ';
	      }
	      $stmt = rtrim($stmt, ' AND ');
	    } else {
	      // @Todo and and or grouping
	    }
	     // print_r($stmt);
	    try {
	      $query = $this->db_connect->query($stmt);

	      if (!$first) {
	      $result = $query->fetchAll();
	      } else {
	        $result = $query->fetch();
	      }


	    }
	    catch(PDOException $e) {
	    echo  "<br>" . $e->getMessage();
	    }
	    // print_r($result);
	    return $result;
	}
}