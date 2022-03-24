<?php

// $Id: class.database.php 1011 2009-06-25 17:27:28Z Ruebenwurzel $

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

/*

Database class

This class will be used to interface between the database
and the Website Baker code

*/

// Stop this file from being accessed directly
if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

if(!defined('DB_URL')) {
	//define('DB_URL', DB_TYPE.'://'.DB_USERNAME.':'.DB_PASSWORD.'@'.DB_HOST.'/'.DB_NAME);
}

define('DATABASE_CLASS_LOADED', true);

class database {
	
	// Set DB_URL
	function database($url = '') {
		// Connect to database
		$this->connect();
		// Check for database connection error
		if($this->is_error()) {
			die($this->get_error());
		}
	}
	
	// Connect to the database
	function connect() {
		$status = $this->db_handle = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
		if(mysql_error()) {
			$this->connected = false;
			$this->error = mysql_error();
		} else {
			if(!mysql_select_db(DB_NAME)) {
				$this->connected = false;
				$this->error = mysql_error();
			} else {
				$this->connected = true;
			}
		}
		return $this->connected;
	}
	
	// Disconnect from the database
	function disconnect() {
		if($this->connected==true) {
			mysql_close();
			return true;
		} else {
			return false;
		}
	}
	
	// Run a query
	function query($statement) {
		$mysql = new mysql();
		$mysql->query($statement);
		$this->set_error($mysql->error());
		if($mysql->error()) {
			return null;
		} else {
			return $mysql;
		}
	}
	
	// Gets the first column of the first row
	function get_one($statement) {
		$fetch_row = mysql_fetch_row(mysql_query($statement));
		$result = $fetch_row[0];
		$this->set_error(mysql_error());
		if(mysql_error()) {
			return null;
		} else {
			return $result;
		}
	}
	
	// Set the DB error
	function set_error($message = null) {
		global $TABLE_DOES_NOT_EXIST, $TABLE_UNKNOWN;
		$this->error = $message;
		if(strpos($message, 'no such table')) {
			$this->error_type = $TABLE_DOES_NOT_EXIST;
		} else {
			$this->error_type = $TABLE_UNKNOWN;
		}
	}
	
	// Return true if there was an error
	function is_error() {
		return (!empty($this->error)) ? true : false;
	}
	
	// Return the error
	function get_error() {
		return $this->error;
	}
	
}

class mysql {

	// Run a query
	function query($statement) {
		$this->result = mysql_query($statement);
		$this->error = mysql_error();
		return $this->result;
	}
	
	// Fetch num rows
	function numRows() {
		return mysql_num_rows($this->result);
	}

	// Fetch row  $typ = MYSQL_ASSOC, MYSQL_NUM, MYSQL_BOTH
	function fetchRow($typ = MYSQL_BOTH) {
		return mysql_fetch_array($this->result, $typ);
	}

	// Get error
	function error() {
		if(isset($this->error)) {
			return $this->error;
		} else {
			return null;
		}
	}

}

?>