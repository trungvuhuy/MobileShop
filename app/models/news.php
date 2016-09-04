<?php
class News extends AppModel {
    var $name = 'News';
    var $belongsTo = array( 

					'CategoryNews' => array(
							'className'     => 'CategoryNews', 
							'foreignKey'    => 'category_id	' 																 
					),

									
			); 
}
?>
