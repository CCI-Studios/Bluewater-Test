<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

error_reporting(E_ALL);
ini_set('display_errors','On');

echo KFactory::get('admin::com.donate.dispatcher')->dispatch();