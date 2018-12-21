<?php

/**
 * Post form.
 *
 * @package    My Project
 * @subpackage form
 * @author     Gabriel Dornescu
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PostForm extends BasePostForm
{
	public function setup()
	{
		$loggedUserId = sfContext::getInstance()->getUser()-> getGuardUser()->getId();
		parent::setup();
		$this->setWidget('user_id', new sfWidgetFormInputHidden(array(), array('value'=>$loggedUserId)));
		$this->setValidator('user_id', new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))));
		$this->setWidget('created_at', new sfWidgetFormInputHidden());
		$this->setValidator('created_at', new sfValidatorDateTime(array('required' => false)));
		$this->setWidget('updated_at', new sfWidgetFormInputHidden());
		$this->setValidator('updated_at', new sfValidatorDateTime(array('required' => false)));
	}

	public function configure()
	{
		$this->widgetSchema['image'] = new sfWidgetFormInputFile(array(
			'label' => 'Image',
		));
		$this->validatorSchema['image'] = new sfValidatorFile(array(
			'required'   => true,
			'path'       => sfConfig::get('sf_upload_dir').'/image',
			'mime_types' => 'web_images',
		),
			array('required' => 'You must choose an image!'));
	}
}

