
<div class="clear"></div>
<?php

$boxes = array(
	1 => array(
		'title' => 'David Wachsman',
		'subtitle' => 'Founder',
		'link' => 'https://www.linkedin.com/in/david-wachsman-a3a84652/',
	),
	2 => array(
		'title' => 'Jesse Platz',
		'subtitle' => 'Account Director',
		'link' => 'https://www.linkedin.com/in/jesse-platz- 750084a1/',
	),
	3 => array(
		'title' => 'Emma Walker',
		'subtitle' => 'Account Director',
		'link' => 'https://linkedin.com/in/emwalker1',
	),
	4 => array(
		'title' => 'Rachel Jermansky',
		'subtitle' => 'Senior Account Executive',
		'link' => 'https://www.linkedin.com/in/racheljermansky/',
	),
	5 => array(
		'title' => 'Amy Longo',
		'subtitle' => 'Senior Account Executive',
		'link' => 'https://www.linkedin.com/in/amylongo/',
	),
	6 => array(
		'title' => 'Meghan Merriman',
		'subtitle' => 'Junior Account Executive',
		'link' => 'https://linkedin.com/in/meghanmerriman',
	),
	7 => array(
		'title' => 'Elizabeth Fitzgerald',
		'subtitle' => 'Account Coordinator',
		'link' => 'https://www.linkedin.com/in/elizabeth-fitzgerald-6b1840a4',
	),
	8 => array(
		'title' => 'Caroline Brady Baker',
		'subtitle' => 'Account Coordinator',
		'link' => 'https://www.linkedin.com/in/caroline-baker-a2315977?trk=hp-identity-name',
	),
	9 => array(
		'title' => 'Kerry Close',
		'subtitle' => 'Account Executive',
		'link' => 'https://www.linkedin.com/in/kerry-close-b4a03b63/',
	),
	10 => array(
		'title' => 'Jack Moloney',
		'subtitle' => 'Account Executive',
		'link' => 'https://www.linkedin.com/in/jack-moloney-226753a0/',
	),
	11 => array(
		'title' => 'Casey Craig',
		'subtitle' => 'Junior Account Executive',
		'link' => '#',
	),
);


foreach($boxes as $key => $value){ ?>
<a href="<?php echo $mainUrl;?>team_single/?id=<?php echo $key;?>&name=<?php echo $value['title'];?>&link=<?php echo htmlentities($value['link']);?>">
<div class="col-sm-3 team_box">
	<div class="team_box_cover"><span><p><?php echo $value['title'];?></p><h6><?php echo $value['subtitle'];?></h6></span></div>
	<img src="<?php echo $mainUrl;?>img/team/<?php echo $key;?>.png"/>
</div>
</a>
<?php } ?>



<div class="clear"></div>




		
 


