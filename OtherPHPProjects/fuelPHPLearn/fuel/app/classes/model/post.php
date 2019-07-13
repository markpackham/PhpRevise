<?php

class Model_Post extends Orm\Model {

	protected static $_properties = array(
		'id',
		'title',
		'body',
		'category',
		'tags',
		'create_date',
	);
}