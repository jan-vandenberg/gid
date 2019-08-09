<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get task id
    $task_id = $_POST['id'];
    $remove = array($task_id);

    $myfile = '../todo.txt';
    $lines = file($myfile);

     $lines = array_filter($lines, function($lineNumber) use ($remove) {
         return !in_array($lineNumber + 1, $remove);
         }, ARRAY_FILTER_USE_KEY);
    
         // Re-assemble the output (the lines already have a line-break at the end)
        $output = implode('', $lines);
    
         // Write back to file
         file_put_contents($myfile, $output);

}
?>
