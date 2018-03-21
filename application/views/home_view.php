<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CURD using CodeIgniter</title>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		/* li {
			float: left;
		} */
		table, th, td {
			border: 1px solid black;
		}
		td {
			padding: 10px;
		}
	</style>
</head>
<body>

<div id="container">
	<h1>Curd operations using CodeIgniter!</h1>

	<div id="body">

	<?php if(!empty($images)){ ?>

	
		<div>
			<table>
				<thead>
					<tr>
						<td>No.</td>
						<td>Name</td>
						<td>Mail</td>
						<td>Edit</td>						
						<td>Delete</td>																		
					</tr>
				</thead>
				<tbody>
					<?php foreach($images as $img):?>
					<tr>
						<td><?php echo $img['id']?></td>
						<td><?php echo $img['name']?></td>
						<td><?php echo $img['uploaded_on']?></td>
						<td><a href="<?php echo base_url().'home/input_edit/'.$img['id'];?>"> Edit </a> </td>						
						<td><a href="<?php echo base_url().'home/delete/'.$img['id'];?>"> Delete </a> </td>
	
					</tr>
					<?php endforeach;?>					
				</tbody>
			</table>
		</div>

	<?php } ?>	
		<h1>Add new entry form</h1>
		<form method="POST" action="<?php echo base_url().'home/add/';?>">
			Name:<input type="text" name="name" size="50" style="margin-left: 27px;margin-bottom: 20px;"><br/>
			Mail:<input type="text" name="uploaded_on" size="50"/ style="margin-left: 10px;"><br/>
			<input type="submit" value="Add" style="margin:15px"/>
		</form>
		
		<h1>Search entry by: name, mail</h1>
		<form method="POST" action="<?php echo base_url().'home/search/';?>">
			Search:<input type="text" name="name" size="50" style="margin-left: 27px;margin-bottom: 20px;"><br/>
			<input type="submit" value="search" style="margin:15px"/>			
		</form>

		<div>
			<table>
				<thead>
					<tr>
						<td>No.</td>
						<td>Name</td>
						<td>Surname</td>																	
					</tr>
				</thead>
				<tbody>
					<?php if(isset($record)){?>
						<tr>
							<td>
								<p><?php echo $record->id;?></p>
							</td>
							<td>
								<p><?php echo $record->name;?></p>								
							</td>
							<td>
								<p><?php echo $record->uploaded_on; ?></p>
							</td>
						</tr>

					<?php }?>				
				</tbody>
			</table>
		</div>
	</div>

</div>

</body>
</html>