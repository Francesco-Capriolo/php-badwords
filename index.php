<?php
    $paraghrap= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores minima ipsam ad, obcaecati tenetur ab a adipisci, quod aperiam sint? Dolor vel quam, minus corrupti eum ipsam atque voluptatum.";
?>
<pre>
    <?php
    var_dump($paraghrap);
    var_dump(strlen($paraghrap));
    var_dump(str_replace('asperiores','***', $paraghrap));
    ?>
</pre>