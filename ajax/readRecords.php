<?php
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">';

    $file = "../txt/todo.txt";
    $no_of_lines = count(file($file));
    $lines = file($file);

    $count = 0;
    while($no_of_lines > $count) {
        $result = $lines[$count]; 
        $count++;
      
        $data .= '<tr>
                <td><button onclick="doneTask('.$count.')" class="btn btn-outline-success">⠀</button></td>
				<td>'.$result.'</td>
    		    </tr>';
    }

    $data .= '</table>';
    echo $data;
?>
