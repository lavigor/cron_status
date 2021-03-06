<?php
/**
*
* @package Cron_status
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
        exit;
}

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'CRON_LOCKED'						=> 'Cron Locked',
	'CRON_TIME_LOCKED'					=> 'Cron time locked',
	'ACP_CRON_STATUS_TITLE'				=> 'Cron Status',
	'ACP_CRON_STATUS_CONFIG_TITLE'		=> 'Check Cron Status',
	'ACP_CRON_STATUS_EXPLAIN'			=> 'Cron Status is a page of your phpBB Board where you can check if cron tasks are ready to be done. The \'Auto\' last task date means that the task has a specific time control option that couldn\'t be recognized by Cron Status extension. A red marked task means a task which never started or which has a problem. A red lock means this task is locked by cron manager and blocks other tasks.',
	'CRON_STATUS_REFRESH'				=> 'Seconds for refresh',
	'CRON_TASK_LOCKED'					=> 'Cron task locked',
	'CRON_STATUS_READY_TASKS'			=> 'Tasks ready to run',
	'CRON_STATUS_NOT_READY_TASKS'		=> 'Not ready tasks',
	'CRON_STATUS_NO_TASKS'				=> 'No available cron tasks',
	'CRON_STATUS_DATE_FORMAT'			=> 'Date format for Cron Status page',
	'CRON_STATUS_DATE_FORMAT_EXPLAIN'	=> 'The date format is the same as the PHP date function.',
	'CRON_STATUS_MAIN_NOTICE'			=> 'Notice on ACP index page',
	'CRON_STATUS_MAIN_NOTICE_EXPLAIN'	=> 'Display Cron Status Notice on ACP index page if Cron is locked.',
	'CRON_TASK_NAME'					=> 'Task name',
	'CRON_TASK_DATE'					=> 'Last task date',
	'CRON_NEW_DATE'						=> 'New task date',
	'CRON_TASK_NEVER_STARTED'			=> 'Never started',
	'CRON_TASK_AUTO'					=> 'Auto',
	'CRON_TASK_DATE_TIME'				=> 'Current date & time',
	'CRON_STATUS_ERROR'					=> 'Refresh error',
	'CRON_STATUS_TIMEOUT'				=> 'Refresh timeout',
	'CRON_STATUS_ERROR_EXPLAIN'			=> 'An error occurred during refreshing the page.',
	'CRON_STATUS_DEVELOPERS'			=> 'Developers',
	'CRON_TASK_RUN'						=> 'Run',
	'CRON_TASK_RUNNING'					=> 'Running...',
));