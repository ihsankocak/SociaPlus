<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SociaPlus</title>
</head>
<?php session_start();
require 'classes/Lig.php';
$lig;

if(!isset($_SESSION['week']) || empty($_SESSION['week']) ){
$lig=new Lig();
$lig->playTheWeek(0);
$_SESSION['lig']=serialize($lig);

$_SESSION['week']=serialize(1);

}
else {
		
		$lig=unserialize($_SESSION['lig']) ;
		$lig->playTheWeek($lig->getFixture()->getTeams()[0]->getPlayed());
		$_SESSION['lig']=serialize($lig);
		//$_SESSION['week']=serialize(unserialize($_SESSION['week']+1));
}
?>

<table>
<tr>
<td>
 <table>
<tr> 
<td>Takımlar</td> 
<td>P</td>
<td>O</td>
<td>G</td>
<td>B</td>
<td>M</td>
<td>Av</td>
</tr>
<?php 
for ($i=0;$i<4;$i++){

echo  "<tr>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getTeamName(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getPoint(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getPlayed(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getWin(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getEqual(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getLost(); echo "</td>";
echo "<td>";echo $lig->getFixture()->getTeams()[$i]->getAverage(); echo "</td>";
echo "</tr>";
}
?>
</table>
</td>
</tr>

<tr>
<td>
<table>
<thead>STS <?php echo $lig->getFixture()->getTeams()[0]->getPlayed(); ?>. Hafta Maç Sonuçları </thead>
<tr> 
<td><?php echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][0]->getTeam1()->getTeamName();?></td> 
<td><?php echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][0]->getScore()[0]; echo "-"; echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][0]->getScore()[1];?></td>

<td><?php echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][0]->getTeam2()->getTeamName();?></td>

</tr>
<tr>
<td><?php echo  $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][1]->getTeam1()->getTeamName();?></td> 
<td><?php echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][1]->getScore()[0]; echo "-"; echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][1]->getScore()[1];?></td>

<td><?php echo $lig->getFixture()->getFixture()[$lig->getFixture()->getTeams()[0]->getPlayed()-1][1]->getTeam2()->getTeamName();?></td>
</tr>
</table>

</td>
</tr>

</table>
<form method="post" action="index.php">
<input type="submit" value="Sonraki Hafta" <?php if($lig->getFixture()->getTeams()[0]->getPlayed()==6){?> disabled="disabled"<?php }?>></input>
</form>
<?php if($lig->getFixture()->getTeams()[0]->getPlayed()==6){echo "<script type='text/javascript'>alert('Lig bitti');</script>";  }?>
	
</html>
