<?php
/*	Project:	EQdkp-Plus
 *	Package:	Destiny game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0 => 'Unknown',
		1 => 'Titan',
		2 => 'Warlock',
		3 => 'Hunter',
	),
	'races' => array(
		0 => 'Unknown',
		1 => 'Human',
		2 => 'Awoken',
		3 => 'Exo',
	),
	'lang' => array(
		'destiny'					=> 'Destiny',
		'core_sett_fs_gamesettings'	=> 'Destiny Settings',
		
		// Roles
		'role1'						=> 'Guardian',
		'role2'						=> 'Range',
		'role3'						=> 'Melee',
	),
);
?>