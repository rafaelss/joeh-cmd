[Joeh_Cmd](http://github.com/rafaelss/joeh-cmd/tree/master) � uma classe que serve para tratar a montagem de comandos e seus argumentos atrav�s do PHP, usando Fluent Interface.

    require 'Joeh/Cmd.php'

    $cmd = new Joeh_Cmd('curl');
    echo $cmd
        ->G()
        ->url('http://www.google.com/');

    // Ouput:
    // curl -G --url http://www.google.com/
    
#### TODO

* Executar o comando
* Tratar os c�digos de retorno do programa
* Tratar mensagens
* Tratar erros