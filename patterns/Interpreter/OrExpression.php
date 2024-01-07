<?php
/*
 * Non terminal Expression
 */
class OrExpression implements IExpression
{
    private $exp1;
    private $exp2;

    function __construct(IExpression $exp1, IExpression$exp2)
    {
        $this->exp1 = $exp1;
        $this->exp2 = $exp2;
    }

    function interpret(int $i): bool
    {
        return $this->exp1->interpret($i) || $this->exp2->interpret($i);
    }
}