<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- *** [ FONTS ] *** -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<!-- *** [ FONT AWESOME ] *** -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
		<!-- *** [ MY CSS ] *** -->
		<link rel="stylesheet" href="css/main.css">
		<!-- *** *** -->
		<link rel="shortcut icon" href="#">
		<title>php-google-faq</title>
	</head>
	<body>

		<?php
			// #########################################################################################

			$data = [
				"CJEU" => [
					"question" => "
						How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?
					",
					"answer" => "
						The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.||
						Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information.||
						If you have a removal request, please fill out this webform. You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.||					
						We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law.||
						When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.||
					"
				],
				"privacy" => [
					"question" => "
						How does Google protect my privacy and keep my information secure?
					",
					"answer" => "
						We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.||
						We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.||					
						You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.||					
						Learn more about how we keep your personal information private and safe — and put you in control.||		
					"
				],
				"country" => [
					"question" => "
						Why is my account associated with a country?
					",
					"answer" => "
						Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:
						<ol>
							<li>
								The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
								<ol class='alpha_list'>
									<li>
										Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland
									</li>
									<li>
										Google LLC, based in the United States, for the rest of the world
									</li>
								</ol>
							</li>
							<li>
								The version of the terms that govern our relationship, which can vary depending on local laws
							</li>
						</ol>
						Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.||
						&&Determining the country associated with your account||
						When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.||
						Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.||
						If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong.||
					"
				],
				"remove" => [
					"question" => "
						How can I remove information about myself from Google's search results?
					",
					"answer" => "
						Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.||
					"
				],
				"websites" => [
					"question" => "
						Are my search queries sent to websites when I click on Google Search results?
					",
					"answer" => "
						In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.||
					"
				],
			];
			// var_dump($data);
			// #########################################################################################
		?>			

		<header>
			<div class="head_top">
				<div class="logo txt_logo">
					<img src="img/Sauron-logo.png" alt="">
					<div class="title">Privacy & Terms</div>
				</div>
				<div class="icons">
					<img src="img/app.png" alt="">
					<img src="img/mr.g.png" alt="">
				</div>
			</div>
			<div class="head_nav txt_nav">
				<ul>
					<li>Overview</li>
					<li>Privacy Policy</li>
					<li>Terms of Service</li>
					<li>Technologies</li>
					<li class="selected">FAQ</li>
				</ul>
			</div>
		</header>

		<main>
			<div class="wrapper60">
				<?php foreach ($data as $key => $item) { ?>
					<div class="faq_block">
						<div class="question txt_question">
							<?php echo $item['question']; ?>
						</div>
						<div class="answer">
							<?php 
								$ans = $item['answer'];
								if (strpos($ans,'||')) {
									$par_list = explode('||',$ans);
								} else {
									$par_list = [$ans];
								}
								foreach ($par_list as $par) {
									if (trim($par) != '') {
										if (strpos($par,'&&')) {
											$par = str_replace('&&','',$par);
											$class = 'sub_title txt_sub_title';			 
										} else {
											$class = 'paragraph';
										}
										?>
											<p class="<?php echo $class ?>"><?php echo trim($par); ?></p>
										<?php 
									}
								} // <!-- php: foreach $par_list -->
							?>
						</div> <!-- answer -->
					</div> <!-- faq_block -->
				<?php } ?> <!-- php: foreach $data -->
			</div> <!-- wrapper60 -->
		</main>

		<footer>
			<div class="footer_row wrapper60">
				<div class="footer_left txt_footer">
					<ul>
						<li>Google &middot;</li>
						<li>About Google &middot;</li>
						<li>Privacy &middot;</li>
						<li>Terms</li>
					</ul>
				</div>
				<div class="footer_right">
					<i class="fas fa-comment-alt"></i>
					<select name="" id="">
						<option value="">Mordor Black Speech</option>
						<option value="">English</option>
					</select>
				</div>
			</div>
		</footer>

	</body>
</html>
