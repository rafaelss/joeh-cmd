Joeh_Cmd é uma classe que serve para tratar a montagem de comandos e seus argumentos através do PHP, usando Fluent Interface.

    require 'Joeh/Cmd.php'

    $cmd = new Joeh_Cmd('curl');
    echo $cmd
        ->G()
        ->url('http://www.google.com/');

    // Ouput:
    // curl -G --url http://www.google.com/
    
# TODO

* Executar o comando
* Tratar os códigos de retorno do programa
* Tratar mensagens
* Tratar erros