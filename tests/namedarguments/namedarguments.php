<?php
func(a: $a);
func(array: $arr);
func(a: $a, b: $b, c: $c);
func(a: $a, ...$b);
$foo -> bar (arg1: $arg1, arg2: $arg2,$arg3, $arg4 , $arg5 ) ;
Foo :: bar( arg1:$arg1,arg2:$arg2 ,$arg3, $arg4 , $arg5 ) ;

$db->Execute($sql, config: [
    $foo,
    $bar,
    $foobar,
    $somewhatLongParameter,
    $somewhatLongParameterX,
    $somewhatLongParameterXYZ
]);

$app->get('/hello/{name}', callback: function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

$this->something->method($argument, val: $this->more->stuff(
    $this->even->more->things->complicatedMethod()
));
