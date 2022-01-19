<?php 

class Foo
{
    public final const X = "foo";
}
 
class Bar extends Foo
{
    public const X = "bar"; // Fatal error: Bar::X cannot override final constant Foo::X
}