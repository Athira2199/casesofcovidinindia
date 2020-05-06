<?php
$url = "https://api.covid19india.org/zones.json";
$json = file_get_contents($url);
$json_array  = json_decode($json, true);
$json = json_decode($json);
$i=0;
echo'	<table class="table" name="users">
		<thead>
			<tr style="text-transform:uppercase;"><th scope="col" style="color:#eeeeee;">District</th><th scope="col" style="color:#eeeeee;">District Code</th><th scope="col" style="color:#eeeeee;">Last Updated</th><th scope="col" style="color:#eeeeee;">Source</th><th scope="col" style="color:#eeeeee;">State</th><th scope="col" style="color:#eeeeee;">State Code</th><th scope="col" style="color:#eeeeee;">Zone</th></tr>
		</thead>
		<tbody>';
$bgcolor="";
while(!empty($json->zones[$i]->district))
{

	if(strcmp("Thiruvananthapuram",$json->zones[$i]->district)==0){
		if(strcmp($json->zones[$i]->zone,"Green")==0){
			$bgcolor="#007E33";
		}
		elseif (strcmp($json->zones[$i]->zone,"Red")==0) {
		$bgcolor="#CC0000";
		}
		else{
		$bgcolor="#FF8800";
		}
	echo '		<tr style="background-color:'.$bgcolor.';">
				<th scope="row">'.$json->zones[$i]->district.'</th>
				<th>'.$json->zones[$i]->districtcode.'</th>
				<th>'.$json->zones[$i]->lastupdated.'</th>
				<th><a href="'.$json->zones[$i]->source.'">'.$json->zones[$i]->source.'</th>
				<th>'.$json->zones[$i]->state.'</th>
				<th>'.$json->zones[$i]->statecode.'</th>
				<th>'.$json->zones[$i]->zone.'</th>
			</tr>';
}
$i++;
}
for($i=0;$i<9;$i++){
	if(strcmp($json->zones[$i]->zone,"Green")==0){
		$bgcolor="#007E33";
	}
	elseif (strcmp($json->zones[$i]->zone,"Red")==0) {
		$bgcolor="#CC0000";
	}
	else{
		$bgcolor="#FF8800";
	}
	echo '		<tr style="background-color:'.$bgcolor.';">
				<th scope="row">'.$json->zones[$i]->district.'</th>
				<th>'.$json->zones[$i]->districtcode.'</th>
				<th>'.$json->zones[$i]->lastupdated.'</th>
				<th><a href="'.$json->zones[$i]->source.'">'.$json->zones[$i]->source.'</th>
				<th>'.$json->zones[$i]->state.'</th>
				<th>'.$json->zones[$i]->statecode.'</th>
				<th>'.$json->zones[$i]->zone.'</th>
			</tr>';
}
echo'
	</tbody>
	</table>';
?>
