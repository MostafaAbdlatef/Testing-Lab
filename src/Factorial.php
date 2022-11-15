<?php 
class Factorial{

    public function factorialCalculator($f) {
        $factorial=1;
        if ($f === 0) {
            return $factorial;
        } elseif ($f < 0 || !is_int($f) || $f == false) {
            return null;
        } else {
            for ($i = $f; $i > 0; $i--) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }
}
?>