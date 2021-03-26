<?php
    $_student_record = [
        array(
            'name' => 'Alex',
            'email' => 'alex@yopmail.com',
            'grade' => 'A'
        ),
        array(
            'name' => 'John',
            'email' => 'John@yopmail.com',
            'grade' => 'B'
        ),
        array(
            'name' => 'Sam',
            'email' => 'sam@yopmail.com',
            'grade' => 'A+'
        ),
        array(
            'name' => 'Alice',
            'email' => 'alice@yopmail.com',
            'grade' => 'C'
        ),
    ];
    
    echo "<table>";


    foreach($_student_record as $data) {
        echo $data['name']. "          ".$data['email']." ".$data['grade']."\n"; 
        echo "<br/>";
    };
        
    echo "</table"
    // print_r($_student_record[name]);

?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <table style="border: 1px solid;">
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>GRADE</th>
            </tr>
            <?php
                foreach($_student_record as $key => $value){
                    foreach($value as $k => $v){
                        echo "<tr>";
                        // echo "<br/>";
                        echo "<td>$v</td>"; // Get value.
                        // echo "<br/>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>