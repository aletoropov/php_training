<?php
/**
 * Abstract Expression
 */


interface IExpression
{
    function interpret(int $i): bool;
}