<?php

/**
 * default actions.
 *
 * @package    My Project
 * @subpackage default
 * @author     Gabriel Dornescu
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
	/**
	 * @param sfWebRequest $request
	 * @throws Doctrine_Query_Exception
	 */
	public function executeSearch(sfWebRequest $request)
	{
		$this->articles = Doctrine_Core::getTable('post')->createQuery()->where('title = ?', 'Cheile Bicazului')->execute();


	}

	/**
	 * @param sfWebRequest $request
	 */
	public function executeHomepage(sfWebRequest $request)
	{
		$this->posts = Post::getArticles(sfConfig::get('app_max_articles_on_homepage'));


	}


	/**
	 * @param sfWebRequest $request
	 * @throws Doctrine_Query_Exception
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->posts = Doctrine_Core::getTable('Post')->createQuery('a')->execute();
	}


	/**
	 * @param sfWebRequest $request
	 * @throws sfError404Exception
	 */
	public function executeShow(sfWebRequest $request)
	{
		$this->post = Doctrine_Core::getTable('Post')->find(array($request->getParameter('id')));
		$this->forward404Unless($this->post);
	}

	/**
	 * @param sfWebRequest $request
	 * @throws sfException
	 */
	public function executeNew(sfWebRequest $request)
	{
		$this->form = new PostForm();


	}

	/**
	 * @param sfWebRequest $request
	 * @throws sfError404Exception
	 * @throws sfException
	 */
	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$this->form = new PostForm();
		$this->processForm($request, $this->form);
		$this->setTemplate('new');
	}



	/**
	 * @param sfWebRequest $request
	 * @throws sfError404Exception
	 * @throws sfException
	 */
	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($post = Doctrine_Core::getTable('Post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
		$this->form = new PostForm($post);

	}

	/**
	 * @param sfWebRequest $request
	 * @throws sfError404Exception
	 * @throws sfException
	 */
	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($post = Doctrine_Core::getTable('Post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
		$this->form = new PostForm($post);
		$this->processForm($request, $this->form);
		$this->setTemplate('edit');
	}

	/**
	 * @param sfWebRequest $request
	 * @throws sfError404Exception
	 * @throws sfStopException
	 * @throws sfValidatorErrorSchema
	 */
	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();
		$this->forward404Unless($post = Doctrine_Core::getTable('Post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
		$post->delete();
		$this->redirect('default/index');
	}

	/**
	 * @param sfWebRequest $request
	 * @param sfForm $form
	 * @throws sfStopException
	 */
	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid()) {
			$post = $form->save();
//			$this->redirect('default/edit?id=' . $post->getId());
			$this->getUser()->setFlash('notice','Success!');
		}

	}


}
