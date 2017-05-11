<section class="image-grid">



<?php

$boxes = array(
	1 => array(
		'id' => 1,
		'bg' => 'light',
		'img' => 'img/about/1.png',
		'title' => 'Expand Brands',
		'text' => 'We work tirelessly to help visionaries take their ideas public and inspire growth in projects, companies and people that we truly believe in. With our relationships with media and experience piquing the interest of influential reporters, we develop, promote and expand the brand of our partners to help them reach their business goals in an accelerated fashion. We provide recommendations on how to best make public company announcements, launch new products and inform all key stakeholders on relevant milestones in order to build public perception, instill trust, and enhance the rate and regularity of favorable media coverage.'
	),
	2 => array(
		'id' => 2,
		'bg' => 'dark',
		'img' => 'img/ic_1.png',
		'title' => 'Content Creation',
		'text' => 'We expertly craft press releases, media kits and media alerts to best convey the right message, at the right time, to our client’s target audience. Our content is tailored to each demographic and aims to achieve consistent media exposure in both trade and mainstream broadcasting, print, and online media. We turn extremely complicated concepts into easily digestible content and customize each key message to generate the greatest impact on media and their readership. Wachsman PR meticulously crafts all content on behalf of our clients to ensure it reflects their brand and highlights their competitive advantage and ability to disrupt current industry practices.'
	),
	3 => array(
		'id' => 1,
		'bg' => 'light',
		'img' => 'img/ic_1.png',
		'title' => 'Plan and Strategize',
		'text' => 'We brainstorm and develop intelligent, client specific public relations strategies, with each campaign including timelines, key messages, objectives and measures of effectiveness. We develop tailor-made PR materials, including press releases, media alerts, event invitations and pitches to optimize media exposure and enhance positive public positioning. We conduct joint planning and task designation to help generate buzz, introduce clients to reporters and build media attention for our clients, their innovations and their staff, particularly within specialized fields. With today’s pervasive 24/7 news cycle, the increasing role of citizen journalism and the exponential rise of social media influence, we adapt PR strategies in response to industry news, shifting timelines, policy changes and client needs.'
	),
	4 => array(
		'id' => 2,
		'bg' => 'dark',
		'img' => 'img/ic_1.png',
		'title' => 'Media Relations',
		'text' => 'With an in-depth knowledge of the global media landscape and strong, cooperative relationships with journalists, correspondents, freelancers, and bloggers, we strive to ensure our clients receive consistent, relevant and positive coverage in media outlets worldwide.By connecting with media on a daily basis, our team aims to communicate each of our client’s announcements and messages in an interesting, appropriate, and professional manner. Whether it\'s becoming a resource for reporters on extremely tight deadlines, or proactively pitching unique story ideas, we are in constant contact with writers, broadcasters, editors, bloggers, producers, and podcasters throughout the fintech industry.'
	),
	5 => array(
		'id' => 1,
		'bg' => 'dark',
		'img' => 'img/ic_1.png',
		'title' => 'Crisis Communications',
		'text' => 'The way a company reacts to crisis can be the difference between irreparable corporate damage and an enduring public trust. Wachsman PR specializes in protecting our client’s reputation against damaging public challenges. We mitigate the potential for image degradation through a process involving methodical planning, open, honest and transparent messaging and the ability to react rapidly upon press or public inquiry. By analyzing the possible risks, preparing individual communication strategies and advising spokespersons, we play an integral part in a company’s response to crisis.'
	),
	6 => array(
		'id' => 1,
		'bg' => 'light',
		'img' => 'img/ic_1.png',
		'title' => 'Professional Consultation',
		'text' => 'We provide ongoing PR consultation and expert advice to help clients inform and satisfy press, consumers, investors, partners and their wider communities. Wachsman PR works closely with company executives to identify and alleviate any issues with a company’s image, corporate messaging or business goals. We are well placed to advise clients on how best to improve their positioning within the media, how best to navigate complex business challenges while striving to connect them with individuals and organizations critical to their long term growth.'
	),
	7 => array(
		'id' => 1,
		'bg' => 'dark',
		'img' => 'img/ic_1.png',
		'title' => 'Reputation Management',
		'text' => 'Wachsman PR focuses on highlighting cutting edge innovations, key differentiators from competitors and unique selling points to further establish each client as an innovator in their respective industry. With the tools of media relations and through the thoughtful exercise of contact with reporters, we earn positive placements and sustained interest from mainstream and trade press that helps enhance an organization’s reputation while also driving business outcomes and investment opportunities.'
	),
	8 => array(
		'id' => 1,
		'bg' => 'light',
		'img' => 'img/ic_1.png',
		'title' => 'Media Engagement Training',
		'text' => 'We offer first class media training and advice to our clients to help prepare them for the excitement and challenges of rapid growth and increased public attention. We provide our clients with best practice media engagement tactics, industry hints and tips, and expert advice when opportunities with print, radio and television media arise. With former journalists and broadcasters embedded in our organization, we conduct training sessions for our clients covering reporter backgrounds, beat history, one-on-one presentations and mock-interviews to set spokespersons in position for success.'
	),
);

$bg = 1;
foreach($boxes as $key => $value){ 

?>

  <div class="image__cell is-collapsed">
		
    <div class="image--basic">
      <a href="#expand-jump-<?php echo $key;?>">
			<div class="cell_cover"><p>CLICK FOR MORE</p></div>
			<div class="cell_iner">
			<span>
				<img src="<?php echo $mainUrl;?>img/about/<?php echo $key;?>.png" />
				<h2><?php echo $value['title'];?></h2>
			</span>
			</div>
			<img id="expand-jump-<?php echo $key;?>" class="basic__img" src="<?php echo $mainUrl;?>img/about/<?php echo $value['bg'];?>.png" /> 
     <!--   <img id="expand-jump-<?php echo $key;?>" class="basic__img" src="<?php echo $mainUrl;?>img/about/<?php echo $key;?>.png" /> -->
      </a>
      <div class="arrow--up"></div>
    </div>
    <div class="image--expand">
      <a href="#close-jump-<?php echo $key;?>" class="expand__close"><img src="<?php echo $mainUrl;?>img/close.png"></a>
	  <div class="pw_box_content">
      <h3><?php echo $value['title'];?></h3>
      <p><?php echo $value['text'];?></p>
	  </div>
    </div>
  </div>

<?php } ?>







</section>			
 


