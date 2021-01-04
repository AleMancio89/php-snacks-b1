<?php 
/* 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo.
*/

$main_paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed elit ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ac dapibus orci. Sed dolor tellus, semper elementum leo ut, maximus sodales turpis. Pellentesque ipsum justo, convallis a turpis nec, ultrices feugiat purus. Donec viverra vehicula erat, ac malesuada eros volutpat nec. Integer nec magna nisl. Nulla sed luctus justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at ante semper diam ultrices euismod nec ac est. Duis fermentum mauris id metus tincidunt, eget fermentum leo hendrerit. Donec eget tellus a leo maximus scelerisque. Vivamus feugiat, nunc sit amet interdum ornare, felis mauris dictum enim, ac imperdiet purus velit ac arcu. Vivamus lorem orci, accumsan id tincidunt eget, sagittis gravida neque. Proin accumsan facilisis diam, eget sagittis ante. Sed aliquam, urna sit amet imperdiet ornare, quam tortor feugiat ante, vel efficitur erat tellus quis mauris.";

$array_paragraph = explode('.', $main_paragraph);

foreach ($array_paragraph as $paragraph){ 
    ?>
    <p><?= $paragraph ?></p>
    <?php
};
?>