<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" id ="dg_add" >New</a>	
<script type="text/javascript">
		$(function(){
		
			function getCurrentDateISO() {
				var date = new Date();
				var y = date.getFullYear();
				var m = date.getMonth()+1;
				var d = date.getDate();
				return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	
			}
			
			$('#dg').edatagrid({
				url: 'get_users.php',
				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php', 
			});
			
			$("#dg_add").click(function() {
				$('#dg').edatagrid('addRow',{
					row:{
						firstname:getCurrentDateISO(),
						lastname:'Shoaib'
					}
				});
			}); 
		});
	</script>


<?php

$str = "2016-01-01 12:17:18 Seoul (10)"; 

$current_date = ""; 


if( preg_match("/^\d{4}-\d{2}-\d{2}/", $str, $matches)) {
	$current_date = $matches[0];
}



echo $current_date;

echo "<br />"; 

$meata_data = explode(" ", $str);

for ($i = 0; $i < count($meata_data); $i++) {
	echo $meata_data[$i] . "<br />";
}
