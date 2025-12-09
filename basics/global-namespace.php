<?php
/* with the namespace, you may find that internal functions are hidden by functions you wrote. To fix, refer to the global function by using a bacjlash before the function name. */

namespace phptherightway;

function file_open()
{
  $file = fopen('test.txt', 'w');
}

function array_function()
{
  $iterator = new \ArrayIterator(array(1, 2, 3));
}

file_open();
array_function();
