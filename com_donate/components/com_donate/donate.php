<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KLoader::load('site::com.donate.mappings');
echo KFactory::get('site::com.donate.dispatcher')->dispatch();