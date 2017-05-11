<section class="image-grid">



<?php

$boxes = array(
	1 => array(
		'id' => 1,
		'img' => 'img/about/1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	2 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	3 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	4 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	5 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	6 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	7 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	8 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	9 => array(
		'id' => 1,
		'img' => 'img/about/1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	/*
	10 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	*/
	11 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	12 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	13 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	/*
	14 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
*/
	16 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	/*
	17 => array(
		'id' => 1,
		'img' => 'img/about/1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	*/
	18 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	19 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	20 => array(
		'id' => 2,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	27 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	21 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),

	24 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	25 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	22 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	26 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),	
	28 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),

	23 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),
	29 => array(
		'id' => 1,
		'img' => 'img/ic_1.png',
		'title' => 'Sample 1',
		'content' => 'client_1'
	),			

);


foreach($boxes as $key => $value){ ?>

<style>
	.pw_box_content img{
    margin-right: 20px;
}
</style>

  <div class="image__cell is-collapsed">
		
    <div class="image--basic">
      <a href="#expand-jump-<?php echo $key;?>">
			<div class="cell_cover"><p>CLICK FOR MORE</p></div>
        <img id="expand-jump-<?php echo $key;?>" class="basic__img" src="<?php echo $mainUrl;?>img/clients/<?php echo $key;?>.png" />
      </a>
      <div class="arrow--up"></div>
    </div>
    <div class="image--expand">
      <a href="#close-jump-<?php echo $key;?>" class="expand__close"><img src="<?php echo $mainUrl;?>img/close.png"></a>
	  <div class="pw_box_content">
	  <?php include('view/partials/clients/' . $value['content'].'.php');?>
	  </div>
    </div>
  </div>

<?php } ?>







</section>			
 


