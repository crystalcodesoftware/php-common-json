<?php

namespace Luggsoft\Php\Common\Json\JsonTest;

class Bar
{
    
    /**
     *
     * @var Qux
     */
    private $qux;
    
    public function __construct()
    {
        $this->qux = new Qux();
    }
    
}