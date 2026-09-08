<?php

function myFunctionCycle($tag, $content, $count) {
    for ($i = 0; $i < $count; $i++) {
        echo '<' . $tag . '>' . $content . '</' . $tag . '><br>';
    }
}
  
