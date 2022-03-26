<?php

/** Description of the Vector class */
class Vector
{
    private $xCoor, $yCoor, $zCoor;

    /** Vector Class Constructor */
    public function __construct($xCoor, $yCoor, $zCoor)
    {
        if ($this->isNumber($xCoor) && $this->isNumber($yCoor) && $this->isNumber($zCoor)) {
            $this->xCoor = $xCoor;
            $this->yCoor = $yCoor;
            $this->zCoor = $zCoor;
        } else {
            echo 'Error: invalid value entered' . PHP_EOL;
        }
    }

    /** Checking for valid values */
    private function isNumber($string): bool
    {
        $string .= '';
        if ($string != '') {
            $chars = $string[0];
        } else {
            return false;
        }
        if (!(($chars >= '0' and $chars <= '9') or ($chars == '-'))) {
            return false;
        }
        $length_string = strlen($string);
        $flag_float = 0;
        for ($cycle_step = 1; $cycle_step < $length_string; $cycle_step++) {
            $chars = $string[$cycle_step];
            if ($chars >= '0' and $chars <= '9') {
                continue;
            } else {
                if ($chars == '.' or $chars == ',') {
                    $flag_float += 1;
                    if ($flag_float == 1) {
                        continue;
                    }
                }
                return false;
            }
        }

        return true;
    }

    /** Addition of vectors */
    public function addVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoor = $this->xCoor + $vector1->xCoor;
        $vector->yCoor = $this->yCoor + $vector1->yCoor;
        $vector->zCoor = $this->zCoor + $vector1->zCoor;

        return $vector;
    }

    /** Vector difference */
    public function subVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoor = $this->xCoor - $vector1->xCoor;
        $vector->yCoor = $this->yCoor - $vector1->yCoor;
        $vector->zCoor = $this->zCoor - $vector1->zCoor;

        return $vector;
    }

    /** Multiplying a vector by a number */
    public function product($number): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoor = $number * $this->xCoor;
        $vector->yCoor = $number * $this->yCoor;
        $vector->zCoor = $number * $this->zCoor;

        return $vector;
    }

    /** Scalar product of vectors */
    public function scalarProduct(Vector $vector1)
    {
        return $this->xCoor * $vector1->xCoor + $this->yCoor * $vector1->yCoor + $this->zCoor * $vector1->zCoor;
    }

    /** Vector product of vectors */
    public function vectorProduct(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoor = (int)$this->yCoor * (int)$vector1->zCoor - (int)$this->zCoor * (int)$vector1->yCoor;
        $vector->yCoor = -((int)$this->xCoor * (int)$vector1->zCoor - (int)$this->zCoor * (int)$vector1->xCoor);
        $vector->zCoor = (int)$this->xCoor * (int)$vector1->yCoor - (int)$this->yCoor * (int)$vector1->xCoor;

        return $vector;
    }

    /** Symbolic representation of a vector */
    public function __toString()
    {
        return '(' . $this->xCoor . ';' . $this->yCoor . ';' . $this->zCoor . ')';
    }
}
