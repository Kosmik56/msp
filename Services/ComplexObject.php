
.gitignore
<?php
namespace App\Services;

use App\Services\ComplexObject as ServicesComplexObject;

class ComplexObject
{
    private $foo;
    private $bar;
    private $baz;
    private $another;

    public function __construct(
        Foo $foo,
        Bar $bar,
        Baz $baz,
        Another $another
    )
    {
        $this -> $foo;
        $this -> $bar;
        $this -> $baz;
        $this -> $another;
    }
    public function doSomething(){
        
    }
   
}
?>
