<?php
/**
 * Kunena Component
 *
 * @package        Kunena.Installer
 *
 * @copyright      Copyright (C) 2008 - 2021 Kunena Team. All rights reserved.
 * @license        https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link           https://www.kunena.org
 **/
defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

// Kunena 1.6.0: Convert attachments table to support new multi file attachments
/**
 * @param   string  $parent parent
 *
 * @return  array
 *
 * @since   Kunena 6.0
 *
 * @throws  KunenaInstallerException
 */
function kunena_160_2010_05_30_attachments($parent)
{
	$db = Factory::getDbo();

	// First check if attachments table has legacy field
	$fields = $db->getTableColumns('#__kunena_attachments');

	if (!isset($fields ['filelocation']))
	{
		// Already converted, there is nothing to do
		return;
	}

	$query = "DROP TABLE IF EXISTS `#__kunena_attachments_bak`";
	$db->setQuery($query);

	try
	{
		$db->execute();
	}
	catch (Exception $e)
	{
		throw new KunenaInstallerException($e->getMessage(), $e->getCode());
	}

	// Attachments table has file location - assume we have to convert attachments
	// Hash and size commited -> NULL
	$query = "RENAME TABLE `#__kunena_attachments` TO `#__kunena_attachments_bak`";
	$db->setQuery($query);

	try
	{
		$db->execute();
	}
	catch (Exception $e)
	{
		throw new KunenaInstallerException($e->getMessage(), $e->getCode());
	}

	$collation = $db->getCollation();

	if (!strstr($collation, 'utf8') && !strstr($collation, 'utf8mb4'))
	{
		$collation = 'utf8_general_ci';
	}

	if (strstr($collation, 'utf8mb4'))
	{
		$str = 'utf8mb4';
	}
	else
	{
		$str = 'utf8';
	}

	$query = "CREATE TABLE IF NOT EXISTS `#__kunena_attachments` (
				`id` int(11) NOT NULL auto_increment,
				`mesid` int(11) NOT NULL default '0',
				`userid` int(11) NOT NULL default '0',
				`hash` char(32) NULL,
				`size` int(11) NULL,
				`folder` varchar(255) NOT NULL,
				`filetype` varchar(20) NOT NULL,
				`filename` varchar(255) NOT NULL,
					PRIMARY KEY (`id`),
					KEY `mesid` (`mesid`),
					KEY `userid` (`userid`),
					KEY `hash` (`hash`),
					KEY `filename` (`filename`) ) DEFAULT CHARACTER SET {$str} COLLATE {$collation};";

	$db->setQuery($query);

	try
	{
		$db->execute();
	}
	catch (Exception $e)
	{
		throw new KunenaInstallerException($e->getMessage(), $e->getCode());
	}

	/*
	$query = $db->getQuery(true);
	$query->insert($db->quoteName('#__kunena_attachments') . ' (mesid, userid, folder, filetype, filename)')
		->select("a.mesid, m.userid,
					SUBSTRING_INDEX(SUBSTRING_INDEX(a.filelocation, '/', -4), '/', 3) AS folder,
					SUBSTRING_INDEX(a.filelocation, '.', -1) AS filetype,
					SUBSTRING_INDEX(a.filelocation, '/', -1) AS filename")
	->from($db->quoteName('#__kunena_attachments_bak', 'a'))
	->leftJoin($db->quoteName('#__kunena_messages', 'm') . ' ON a.mesid = m.id');*/

	$query = "INSERT INTO `#__kunena_attachments` (mesid, userid, folder, filetype, filename)
				SELECT a.mesid, m.userid,
					SUBSTRING_INDEX(SUBSTRING_INDEX(a.filelocation, '/', -4), '/', 3) AS folder,
					SUBSTRING_INDEX(a.filelocation, '.', -1) AS filetype,
					SUBSTRING_INDEX(a.filelocation, '/', -1) AS filename
				FROM `#__kunena_attachments_bak` AS a
				JOIN `#__kunena_messages` AS m ON a.mesid = m.id";
	$db->setQuery($query);

	try
	{
		$db->execute();
	}
	catch (Exception $e)
	{
		throw new KunenaInstallerException($e->getMessage(), $e->getCode());
	}

	// By now the old attachmets table has been converted to the new Kunena 1.6 format
	// with the exception of file size and file hash that cannot be calculated inside
	// the database. Both of these columns are set to null. As we could be dealing with
	// thousands of medium to large size images, we cannot afford to iterate over all
	// of them to calculate this values. A seperate maintenance task will have to be
	// created and executed outside of the upgrade itself.

	return ['action' => '', 'name' => Text::_('COM_KUNENA_INSTALL_160_ATTACHMENTS'), 'success' => true];
}