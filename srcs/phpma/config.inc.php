<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <http://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/*
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
$cfg['blowfish_secret'] = '9sUXU;5YRpT;H}S=JBP8=L6XOD0h.42t'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
/*
 * Servers configuration
 */
$i = 0;
/*
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['TempDir'] = '/tmp';
$cfg['PmaAbsoluteUri'] = '/';

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
