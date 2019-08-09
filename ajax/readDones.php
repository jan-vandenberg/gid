<?php
// Design initial table header 
$data_done = '<table class="table table-bordered table-striped">
						<tr>
							<th>Task</th>
							<th>Delete</th>
						</tr>';

$file = "../done.txt";
$no_of_lines = count(file($file));
$lines = file($file);

$count = 0;
while($no_of_lines > $count) {
        $result = $lines[$count]; 
        $count++;
        $data_done .= '<strike> 
            <tr>
				<td><strike>'.$result.'</strike></td>
                <td><button onclick="deleteDone('.$count.')" class="btn btn-danger">Delete</button></td>
            </tr>
            </strike>';
    }
    $data_done .= '</table>';
    echo $data_done;
?>
