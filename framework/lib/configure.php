<?
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 Harshwardhan Kumar 
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category   MAIN
 * @package    CONFIGURATION
 * @subpackage PRIMARY CONFIGURATION FILE
 * @author     Harshwardhan Kumar 
 * @copyright  2012 Harshwardhan Kumar.
 * @license    http://www.opensource.org/licenses/mit-license.php  MIT License
 * @version    [ Version ]
 * @link       http://Mechahawks.com
 */

define('SITENAME', 'Thryfts');

define('FOLDER','/thryfts/platforms/admin/');

define('BASE_URL', 'http://localhost/thryfts/platforms/admin/'); // actual url to the base folder

define('DEFAULT_APP_LOGO', 'no_logo.jpg'); // actual url to the base folder

define('DEFAULT_C', 'default.php'); 	// default controller to load

define('DEFAULT_F', 'index');		// default function to load if no function argument is supplied- dont change this if you are unsure of what you are doing

define('debuging', true);			// set debugging and error reporting "true" or "false"

define('DB', 'thryfts');			// database name

define('DB_USER', 'root');			// db username

define('DB_PASS', '');				// db Password

define('OURHOST', 'localhost');				// db Password

define('UPLOAD_LOCATION_ICONS','/uploads/'); // always should have forward slash!

define('MAX_IMAGE_SIZE',500000);		// values in BYTES 5KB ~ 500,000 bytes

$excluded_folders=array('assets','bs3','bucket-ico-fonts','css','js','images');

/* add this to htaccess file to do more robust url handelling
	# BEGIN ci
	#<IfModule mod_rewrite.c>
	#Options +FollowSymLinks
	#RewriteEngine On
	 
	#RewriteCond %{SCRIPT_FILENAME} !-d
	#RewriteCond %{SCRIPT_FILENAME} !-f
	 
	#RewriteRule ^.*$ ./index.php
	#</IfModule>
*/

// DATABASE CONNECTIONS
function creatConnection(){
		$con_global = mysqli_connect(OURHOST,DB_USER,DB_PASS,DB);

// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $con_global;
}



?>