<?php 

$score = array(98, 90, 90, 78, 20);
$sorting = $score;
rsort($sorting);

foreach ($score as $key => $value) {
	foreach ($sorting as $keySorting => $valueSorting) {
		if($value === $valueSorting)
        {
			$key = $keySorting;
			break;
		}
	}
	echo $valueSorting . ' - Rank: ' . ((int)$key+1) . '<br>';
}
?>