<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Search Page</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}


	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>


<div id="container">
    <table>
    <?php
        // Displaying the decrypted text to the user
        if(!empty($userData['decryptedText'])):
            ?>
            <tr>
                <td><?php echo 'Your decrypted text is : '.$userData['decryptedText']; ?></td>
            </tr>

            <?php
        endif;
        ?>
    </table>

    <a href="<?php echo site_url(); ?>">Back</a>
</div>

</body>
</html>