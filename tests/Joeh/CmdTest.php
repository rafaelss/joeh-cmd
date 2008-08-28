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

require_once dirname(__FILE__) . "/../config.php";
require_once VENDOR_PATH . "Joeh/Test/UnitTestCase.php";
require_once VENDOR_PATH . "Joeh/Cmd.php";

class Joeh_CmdTest extends Joeh_Test_UnitTestCase {

    public function testProgram() {
        $cmd = new Joeh_Cmd('curl');
        $this->assertSame('curl', $cmd->__toString());
    }

    public function testLongArgument() {
        $cmd = new Joeh_Cmd('curl');
        $cmd->help();

        $this->assertSame('curl --help', $cmd->__toString());
    }

    public function testLongArguments() {
        $url = 'http://www.google.com/';
    
        $cmd = new Joeh_Cmd('curl');
        $cmd->G()->url($url);

        $this->assertSame("curl -G --url {$url}", $cmd->__toString());
    }

    public function testShortArgument() {
        $cmd = new Joeh_Cmd('ls');
        $cmd->a();
        
        $this->assertSame("ls -a", $cmd->__toString());
    }

    public function testShortArguments() {
        $cmd = new Joeh_Cmd('ls');
        $cmd->l()->s()->a()->w('100')->_('directory');

        $this->assertSame('ls -l -s -a -w 100', $cmd->__toString());
    }
}
?>