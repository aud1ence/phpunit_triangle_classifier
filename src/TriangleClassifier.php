<?php

class TriangleClassifier
{

    public function isTriangle($a, $b, $c)
    {
//        throw new ErrorException('This is error');
        if ($b - $c < $a && $a < $b + $c) {
            return true;
        } elseif ($a - $c < $b && $b < $a + $c) {
            return true;
        } elseif ($a - $b < $c && $c < $b + $a) {
            return true;
        }
        return false;
    }
}