<?php
	/* @var $this MemberController */

	$this->breadcrumbs=array(
		'Member',
	);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<?php
	$this->widget('zii.widgets.grid.CGridView', array(
	    'id' => 'grid_1',                
	    'dataProvider' => $dataProvider, 
	    'enablePagination' => true,      
	    'columns' => array(              
	        array(
	            'name' => 'id',
	            'header' => 'ID',
	        ),
	        array(
	            'name' => 'username',
	            'header' => 'Username',
	        ),
	        array(
	            'name' => 'password',
	            'header' => 'Password',
	        ),
	        array(
	            'name' => 'myprofile.firstName',
	            'header' => 'Firstname',
	        ),
	        array(
	            'name' => 'myprofile.lastName',
	            'header' => 'Lastname',
	        ),
	    ),
	));
?>