<?php
/*
The MIT License

Copyright (c) 2008 Rafael Souza <rafael.ssouza@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

if(!defined("ROOT_PATH")) {
	define("ROOT_PATH", realpath(dirname(__FILE__) . "/../") . "/");
}
if(!defined("VENDOR_PATH")) {
	define("VENDOR_PATH", ROOT_PATH . "lib/");
}
if(!defined("TEST_PATH")) {
	define("TEST_PATH", dirname(__FILE__));
}
if(!defined("TMP_PATH")) {
	define("TMP_PATH", ROOT_PATH . "tmp/");
}
if(!defined("COVERAGE_PATH")) {
	define("COVERAGE_PATH", ROOT_PATH . "coverage/");
}
if(!defined("LOG_PATH")) {
	define("LOG_PATH", dirname(__FILE__) . "/../logs/");
}
if(!defined('UPLOAD_PATH')) {
	define("UPLOAD_PATH", ROOT_PATH . "upload/");
}

set_include_path(get_include_path() . PATH_SEPARATOR . VENDOR_PATH);
?>