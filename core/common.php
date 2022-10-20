<?php

namespace core;

function console($data)
{
   
    $style = <<< STYLE
        border: 1px solid #aaa;
        border-radius: 4px;
        background-color: #f4f4f4;
        padding: 4px;
        font-size: 16px;
        color: tomato;
    STYLE;
    ob_start();
    var_dump($data);
    printf('<pre  style="%s">%s</pre>',$style,ob_get_clean());
}

console("hello pframework");
console(100);
console([1,2,3]);
console(['id'=>1,'username'=>'bobostudio','age'=>27]);

$user = new class ('bobostudio'){
    private string $username;
    public function __construct($username)
    {
        $this->username = $username;
    }
    public function __get($name){
        return $this->username;
    }
};

console($user);
console($user->username);