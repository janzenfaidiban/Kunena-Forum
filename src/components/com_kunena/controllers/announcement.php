<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Site
 * @subpackage      Controllers
 *
 * @copyright       Copyright (C) 2008 - 2017 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();

/**
 * Kunena Announcements Controller
 *
 * @since  2.0
 */
class KunenaControllerAnnouncement extends KunenaController
{

	/**
	 *
	 * @since Kunena
	 */
	public function none()
	{
		// FIXME: This is workaround for task=none on edit.
		$this->edit();
	}

	/**
	 * @throws Exception
	 * @since Kunena
	 */
	public function publish()
	{
		if (!\Joomla\CMS\Session\Session::checkToken('post'))
		{
			$this->app->enqueueMessage(JText::_('COM_KUNENA_ERROR_TOKEN'), 'error');
			$this->setRedirectBack();

			return;
		}

		$cid = $this->app->input->post->get('cid', array(), 'array');
		Joomla\Utilities\ArrayHelper::toInteger($cid);

		foreach ($cid as $id)
		{
			$announcement = KunenaForumAnnouncementHelper::get($id);
			$date_today   = \Joomla\CMS\Factory::getDate();

			if ($announcement->published == 1 && $announcement->publish_up > $date_today && $announcement->publish_down > $date_today)
			{
				continue;
			}

			$announcement->published = 1;

			if (!$announcement->authorise('edit') || !$announcement->save())
			{
				$this->app->enqueueMessage($announcement->getError(), 'error');
			}
			else
			{
				if ($this->config->log_moderation)
				{
					KunenaLog::log(KunenaLog::TYPE_MODERATION, KunenaLog::LOG_ANNOUNCEMENT_PUBLISH, array('id' => $announcement->id));
				}

				$this->app->enqueueMessage(JText::sprintf('COM_KUNENA_ANN_SUCCESS_PUBLISH', $this->escape($announcement->title)));
			}
		}

		$this->setRedirectBack();
	}

	/**
	 * @throws Exception
	 * @since Kunena
	 */
	public function unpublish()
	{
		if (!\Joomla\CMS\Session\Session::checkToken('post'))
		{
			$this->app->enqueueMessage(JText::_('COM_KUNENA_ERROR_TOKEN'), 'error');
			$this->setRedirectBack();

			return;
		}

		$cid = $this->app->input->get('cid', array(), 'post', 'array');
		Joomla\Utilities\ArrayHelper::toInteger($cid);

		foreach ($cid as $id)
		{
			$announcement = KunenaForumAnnouncementHelper::get($id);
			$date_today   = \Joomla\CMS\Factory::getDate();

			if ($announcement->published == 0 && $announcement->publish_down > $date_today && $announcement->publish_down > $date_today)
			{
				continue;
			}

			$announcement->published = 0;

			if (!$announcement->authorise('edit') || !$announcement->save())
			{
				$this->app->enqueueMessage($announcement->getError(), 'error');
			}
			else
			{
				if ($this->config->log_moderation)
				{
					KunenaLog::log(KunenaLog::TYPE_MODERATION, KunenaLog::LOG_ANNOUNCEMENT_UNPUBLISH, array('id' => $announcement->id));
				}

				$this->app->enqueueMessage(JText::sprintf('COM_KUNENA_ANN_SUCCESS_UNPUBLISH', $this->escape($announcement->title)));
			}
		}

		$this->setRedirectBack();
	}

	/**
	 * @throws Exception
	 * @since Kunena
	 */
	public function edit()
	{
	    $cid = $this->app->input->post->get('cid', array(), 'array');
		Joomla\Utilities\ArrayHelper::toInteger($cid);

		$announcement = KunenaForumAnnouncementHelper::get(array_pop($cid));

		$this->setRedirect($announcement->getUrl('edit', false));
	}

	/**
	 * @throws Exception
	 * @since Kunena
	 */
	public function delete()
	{
		if (!\Joomla\CMS\Session\Session::checkToken('request'))
		{
			$this->app->enqueueMessage(JText::_('COM_KUNENA_ERROR_TOKEN'), 'error');
			$this->setRedirectBack();

			return;
		}

		$cid = $this->app->input->get('cid', (array) $this->app->input->getInt('id'), 'post', 'array');
		Joomla\Utilities\ArrayHelper::toInteger($cid);

		foreach ($cid as $id)
		{
			$announcement = KunenaForumAnnouncementHelper::get($id);

			if (!$announcement->authorise('delete') || !$announcement->delete())
			{
				$this->app->enqueueMessage($announcement->getError(), 'error');
			}
			else
			{
				if ($this->config->log_moderation)
				{
					KunenaLog::log(KunenaLog::TYPE_MODERATION, KunenaLog::LOG_ANNOUNCEMENT_DELETE, array('id' => $announcement->id));
				}

				$this->app->enqueueMessage(JText::_('COM_KUNENA_ANN_DELETED'));
			}
		}

		$this->setRedirect(KunenaForumAnnouncementHelper::getUrl('list', false));
	}

	/**
	 * @throws Exception
	 * @since Kunena
	 */
	public function save()
	{
		if (!\Joomla\CMS\Session\Session::checkToken('post'))
		{
			$this->app->enqueueMessage(JText::_('COM_KUNENA_ERROR_TOKEN'), 'error');
			$this->setRedirectBack();

			return;
		}

		$now                    = new \Joomla\CMS\Date\Date;
		$fields                 = array();
		$fields['title']        = $this->app->input->getString('title', '', 'post', 'raw');
		$fields['description']  = $this->app->input->getString('description', '', 'post', 'raw');
		$fields['sdescription'] = $this->app->input->getString('sdescription', '', 'post', 'raw');
		$fields['created']      = $this->app->input->getString('created', $now->toSql());
		$fields['publish_up']   = $this->app->input->getString('publish_up', $now->toSql());
		$fields['publish_down'] = $this->app->input->getString('publish_down', $now->toSql());
		$fields['published']    = $this->app->input->getInt('published', 1);
		$fields['showdate']     = $this->app->input->getInt('showdate', 1);

		$id           = $this->app->input->getInt('id');
		$announcement = KunenaForumAnnouncementHelper::get($id);
		$announcement->bind($fields);

		if (!$announcement->authorise($id ? 'edit' : 'create') || !$announcement->save())
		{
			$this->app->enqueueMessage($announcement->getError(), 'error');
			$this->setRedirectBack();

			return;
		}

		if ($this->config->log_moderation)
		{
			KunenaLog::log(KunenaLog::TYPE_MODERATION, $id ? KunenaLog::LOG_ANNOUNCEMENT_EDIT : KunenaLog::LOG_ANNOUNCEMENT_CREATE, array('id' => $announcement->id));
		}

		$this->app->enqueueMessage(JText::_($id ? 'COM_KUNENA_ANN_SUCCESS_EDIT' : 'COM_KUNENA_ANN_SUCCESS_ADD'));
		$this->setRedirect($announcement->getUrl('default', false));
	}
}
