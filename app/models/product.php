<?php
class Product extends AppModel {
    var $name = 'Product';
    var $belongsTo = array(
		'Category' => array(
			'className'     => 'Category',
			'foreignKey'    => 'category_id'
		),
	);
}
?>
