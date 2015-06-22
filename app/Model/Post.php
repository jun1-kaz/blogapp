<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

	public $displayField = 'title';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'タイトルは必須入力です',
			),
			'maxLength' => array(
				'rule' => array('maxLength', '255'),
				'message' => 'タイトルは255文字以内で入力してください',
			)
		),
	);
}
