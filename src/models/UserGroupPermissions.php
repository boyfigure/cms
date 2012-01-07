<?php

class UserGroupPermissions extends BlocksModel
{
	private static $belongsTo = array(
		'group' => 'UserGroups'
	);

	private static $attributes = array(
		'name' => array('type' => AttributeType::String, 'required' => true),
		'value' => array('type' => AttributeType::Integer, 'required' => true)
	);
}
