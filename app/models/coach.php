<?php
class Coach
{
	function get()
	{
		$DB = new Database();
		$query = "select * from coach";
		$data = $DB->read($query);
		return $data;
	}
}