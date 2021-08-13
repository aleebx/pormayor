<?php

class Facebook_model extends CI_Model
{
	// get the user from the facebook cookie
	function getUser($access_token)
	{
		$user = @json_decode(file_get_contents( 'https://graph.facebook.com/me?fields=name,id,email&access_token='.$access_token), true);
		return $user;
	}
	
	function getPicture($access_token)
	{
		$user = @json_decode(file_get_contents( 'https://graph.facebook.com/me/picture?access_token='.$access_token), true);
		return $user;		
	}
	
	// get any user
	function get_any_user($access_token, $user_id)
	{
		$user = @json_decode(file_get_contents( 'https://graph.facebook.com/'.$user_id.'?access_token='.$access_token), true);
		return $user;		
	}

	function getFriendIds($access_token, $include_self = TRUE)
	{
		$cookie = $this->get_facebook_cookie();
		$friends = @json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token), true);

		$friend_ids = array();

		foreach($friends['data'] as $friend)
		{
			$friend_ids[] = $friend['id'];
		}

		if($include_self == TRUE) 
		{
			$friend_ids[] = $cookie['uid']; 
		}

		return $friend_ids;
	}

	function getFriends($access_token, $include_self = TRUE)
	{
		$cookie = $this->get_facebook_cookie();
		$friends = @json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token), true);

		if($include_self == TRUE)
		{ 
			$friends['data'][] = array(	'name'=>'You', 'id' => $cookie['uid'] ); 
		}

		return $friends['data'];
	}
	
	function getFriendsFriends($access_token, $friend, $include_self = TRUE)
	{
		$cookie = $this->get_facebook_cookie();
		$friends = @json_decode(file_get_contents('https://graph.facebook.com/'.$friend.'/friends?access_token='.$access_token), true);
    	echo $access_token;

		if($include_self == TRUE) 
		{	
			$friends['data'][] = array('name'   => 'You','id' => $cookie['uid']); 
		}

		return $friends['data'];
	}		

	function getFriendArray($access_token, $include_self = TRUE)
	{
		$cookie = $this->get_facebook_cookie();
		$friendlist = @json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token), true);
		$friends = array();
		
		foreach($friendlist['data'] as $friend)
		{
			$friends[$friend['id']] = $friend['name'];
		}

		if($include_self == TRUE)
		{
			$friends[$cookie['uid']] = 'You';			
		}

		return $friends;
	}
}

?>