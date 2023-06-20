<?php
defined('BASEPATH') OR exit('No direct script access allowed');
print_r($userData); // Array ( [user_input] => cdD [user_email] => dA@SDSA.IN )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User RecordID and Encryption Key</title>
    <style>
        table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <?php
        if(!empty($userData)){
            if($userData['msg'] === 'success'){
    ?>
            <tr>
                <td><?php echo 'Record ID: '.$userData['record_id']; ?></td>
            </tr>
            <tr>
                <td><?php echo 'Encrpted key: '.$userData['encryption_key']; ?></td>
            </tr>

            <?php
            }else if($userData['msg'] === 'error'){
                echo "Error in inserting the data!";
            }
        }     
    ?>
    </table>
</body>
</html>