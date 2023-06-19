<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Input</title>

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
    <form action="<?= base_url('users/create') ?>" method="post">
        <span><?php echo validation_errors(); ?></span>
        <label class="label">Custom Text</label>
        <input type="text" name="user_input"><br>
        <label class="label">Email Address</label>
        <input type="email" name="user_email">
        <input type="submit">
    </form>

    <table>
    <?php
        // After successful submission, the record id and encryption key should be displayed to the user
        if(!empty($show_data)):
        foreach ($show_data as $show):
            ?>
            <tr>

                <td><?php echo 'Encrpted key: '.$show->randomkey; ?></td>
                <td><?php echo 'Record ID: '.$show->recordId; ?></td>
            </tr>

            <?php

        endforeach;
        endif;
        ?>
    </table>
</div>

</body>
</html>
