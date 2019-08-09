<?php
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>ID</th>
							<th>Task</th>
							<th>Done</th>
							<th>Delete</th>
						</tr>';

$file = "../todo.txt";
$no_of_lines = count(file($file));
$lines = file($file);

$count = 0;
while($no_of_lines > $count) {
        $result = $lines[$count]; 
        $count++;
      
        $data .= '<tr>
				<td>'.$count.'</td>
				<td>'.$result.'</td>
                <td><button onclick="doneTask('.$count.')" class="btn btn-success">Done</button></td>
                <td><button onclick="deleteTask('.$count.')" class="btn btn-danger">Delete</button></td>
    		</tr>';
    }

    $data .= '</table>';
    echo $data;
?>
