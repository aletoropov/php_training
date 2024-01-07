<?php

/**
 * Terminal Expression
 */
class DivExpression implements IExpression
{
    private int $devider = 0;

    public function __construct(int $devider)
    {
        $this->devider = $devider;
    }
    function interpret(int $i): bool
    {
        return $i % $this->devider == 0;
    }
}