<?php
// Design initial table header 
$data_done = '<table class="table table-bordered table-striped">';

$file = "../txt/done.txt";
$no_of_lines = count(file($file));
$lines = file($file);

$count = 0;
while($no_of_lines > $count) {
        $result = $lines[$count]; 
        $count++;
        $data_done .= '<strike> 
            <tr>
                <td><button onclick="deleteDone('.$count.')" class="btn btn-link">✔️</button></td>
				<td><strike>'.$result.'</strike></td>
                <td><button onclick="deleteDone('.$count.')" class="btn btn-outline-danger">Delete</button></td>
            </tr>
            </strike>';
    }
    $data_done .= '</table>';
    echo $data_done;
?>
