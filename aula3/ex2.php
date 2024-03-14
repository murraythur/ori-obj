<?php
    function area($l1, $l2) : float
    {
        return $l1*$l2;
    }

    function per($l1, $l2) : float
    {
        return $l1+$l1+$l2+$l2;
    }
    echo "area and perimeter calculus .. \n\n";
      for ($i=0; $i<3; $i++) 
    { 
        $base = (float) readline("base = ");
        $height = (float) readline("height = ");

        $area = (float) area($base, $height);
        $per = (float) per($base, $height);

        echo "area = " . $area . "cms2 \n";
        echo "per = " . per . "cms \n\n";
    }
?>
