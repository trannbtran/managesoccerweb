<?php
class Stadium
{
	function get()
	{
		$DB = new Database();
		$query = "select * from stadium";
		$data = $DB->read($query);
		return $data;
	}
}