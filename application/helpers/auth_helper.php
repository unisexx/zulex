<?php

function login($username,$password)
{
	$CI =& get_instance();
	$user = new User();
	$user->where(array('username'=>$username,'password'=>$password))->get();
	if($user->exists())
	{
		$CI->session->set_userdata('id',$user->id);
		$CI->session->set_userdata('level',$user->level_id);
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function is_login($level_name = FALSE)
{
	$CI =& get_instance();
	$user = new User($CI->session->userdata('id'));
	if($level_name)
	{
		$level = new Level();
		if($user->level->level)
		{
			$id = ($level->get_by_level($level_name)->id >= $user->level->id)? true : false ;
		}
		else
		{
			$id = false;
		}
	}
	else
	{
		$id = $user->id;
	}
	return ($id) ? true : false;
}

function user($id=FALSE)
{
	$CI =& get_instance();
	$id = ($id)?$id:$CI->session->userdata('id');
	$user = new User($id);
	return $user;
}

function logout()
{
	$CI =& get_instance();
	$CI->session->unset_userdata('id');
	$CI->session->unset_userdata('level');
}
	
?>