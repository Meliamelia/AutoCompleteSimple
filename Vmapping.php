<html>
<head>
  <title>Mapping</title>
  <link href="<?php echo base_url();?>asset/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />
  <style>
table {
    border-collapse: collapse;
    width: 20%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f6f6f2}
</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Instance Name</th>
		</tr>
		<?php 
			$no = 1;
			foreach($InstanceData as $record){
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $record['InstanceName']; ?></td>
		</tr>
		<?php $no++;}?>
	</table>
<input type="text" id="InstanceName" placeholder="Instance Name">
<script type="text/javascript" src="<?php echo base_url();?>asset/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript">
$(function(){
  $("#InstanceName").autocomplete({
    source: "<?php echo base_url();?>Cmapping/TermData" 
  });
});
</script>
 
 
</body>
</html>
