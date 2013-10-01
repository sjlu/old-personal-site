<?php
/*
THIS SITE IS FULLY DYNAMIC, MEANING THAT THIS RENDERS
CONTENT BASED ON USER INPUT, FORMATS IT CORRECTLY
AND RENDERS GRAPHICS WHEN NEEDED. THIS SCRIPT HAS
BEEN DEVELOPED BY STEVEN J. LU TO MAKE THE EASE
OF ADDING CONTENT TO SITES MUCH EASIER. ANY
QUESTIONS SHOULD BE SENT TO SLU@BURST-DEV.COM

PLEASE MAKE SURE TO FOLLOW PROPER DATA ENTRY
OR THERE WILL BE SCRIPT ERRORS.
*/

$name = 'Steven J. Lu';
$email = 'tacticalazn@gmail.com';
$meta_keywords = array('steven lu', 'steven', 'lu', 'web developer', 'open source', 'facebook developer', 'burst development', 'music application', 'student');
$meta_desc = 'Steven Lu, a Rutgers University student, web developer and entrepreneur who has created Burst Development and the Facebook Music application.';

$curr_work = array(
	array('position' => 'Student Systems Programmer', 'place' => 'Rutgers - Open System Solutions', 'link' => 'http://oss.rutgers.edu/'),
	array('position' => 'Owner of and Developer', 'place' => 'Burst Development', 'link' => 'http://burst-dev.com/'),
);

$past_work = array(
   'Worked at <a href="http://telcordia.com/">Telcordia Technolgies</a> as a intern in ADSL research, specifically the <a href="http://en.wikipedia.org/wiki/TR-069">TR-069</a>',
	'Participated in <a href="http://usfirst.org/">FIRST Robotics</a>, <a href="http://team41robotics.com/">Team 41</a> - which won the 2008 NYC Regional and was awarded the 2009 NJ Innovation Award for depth perceptive "blob" tracking'
);

$edu = array(
	array('name' => 'Rutgers University', 
			'link' => 'http://rutgers.edu/',
			'fields' => array(
								array('name' => 'Computer Engineering', 'link' => 'http://www.ece.rutgers.edu'),
								array('name' => 'Computer Science', 'link' => 'http://cs.rutgers.edu')
							),
			'year' => '2013, B.S.'
	)
);

$curr_proj = array(
	array('name' => 'FB Music App', 'link' => 'http://www.facebook.com/apps/application.php?id=2436915755'),
	array('name' => 'RU Mobile Apps', 'link' => 'http://blog.stevenlu.com/post/2747716115/rutgers-iphone-app-1-14-2011-lots-of')
);

$past_proj = array(
	'Worked on the Amped Grid project, which was discontinued',
	'Created a simple inventory catalog and inquiry script, which is now <a href="https://github.com/sluzorz/Inventory-Cataloger">open source</a>',
	'Developed the <a href="http://mandomandarin.com">Mando Mandarin</a> Facebook <a href="http://www.facebook.com/apps/application.php?id=6611557469">application</a>',
	'Donated initial website design to the <a href="http://freedfoundation.org">F.R.E.E.D. Foundation</a>'
);

$profiles = array(
	array('name' => 'facebook', 'link' => 'http://facebook.com/sluzorz/'),
	array('name' => 'linkedin', 'link' => 'http://linkedin.com/in/stevenlu'),
 	array('name' => 'tumblr', 'link' => 'http://blog.stevenlu.com'),
	array('name' => 'twitter', 'link' => 'http://twitter.com/stevenlu'),
	array('name' => 'email', 'link' => 'mailto:' . $email . '')
);

$articles = array(
   array('title' => 'Top 20 Facebook Music Apps', 'link' => 'http://evolver.fm/2011/03/08/top-20-facebook-music-apps/', 'publisher' => 'Evolver.fm', 'date' => 'March 2011'),
	array('title' => '20 Awesome Facebook Music Applications For Music Lovers and Musicians', 'link' => 'http://savedelete.com/20-awesome-facebook-music-applications-for-music-lovers-and-musicians.html', 'publisher' => 'SaveDelete', 'date' => 'May 2010'),
	array('title' => 'Top 10 Facebook Applications for Music Lovers', 'link' => 'http://mashable.com/2009/11/10/music-facebook-applications/', 'publisher' => 'Mashable', 'date' => 'January 2010'),
	array('title' => 'Twelve alternatives to Facebook\'s Music app', 'link' => 'http://news.cnet.com/8301-17939_109-10219806-2.html', 'publisher' => 'CNET', 'date' => 'April 2009'),
 	array('title' => 'In Brief: The Amped Grid', 'link' => 'http://dl.dropbox.com/u/2499485/stuffedtech-ampedgrid.pdf', 'publisher' => 'StuffedTech', 'date' => 'February 2008'),
	array('title' => 'Rocking your profile page - The best music applications on Facebook', 'link' => 'http://www.insidefacebook.com/2007/07/24/rocking-your-profile-page-the-best-music-applications-on-facebook/', 'publisher' => 'Inside Facebook', 'date' => 'July 2007')
);

$twitter = json_decode(file_get_contents("http://stevenlu.com/twitter/timeline.php?token=14695072-zmh5hOrP8RXCCkbymI9ARAGTQLmGWCQeaKOoZha0B&secret=z9fEDmG8cyA0oiVe8x915ocXHtCC4BVxaVyV7xkkX8"), true);

$keywords = array('sluzorz','tacticalazn','sjlu');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <style type="text/css">
      body 
      {
         font: normal 13px Helvetica, Arial, sans-serif;
         color: #000;   
         background: #c0c0c0; 
         margin:50px 0px; 
         padding:0px; 
         text-align:center;
      }

      #container
      {
         width:800px;
         margin:0px auto;
         text-align:center;
         padding:15px;
         border:6px solid #666;
         background-color:#fff;
      }

      a 
      {
         color: #3b5998; 
         text-decoration:none;
      }

      a:hover 
      {
         text-decoration: underline;
      }

      img
      {
         margin-top: -3px;
         position: relative;
         vertical-align: middle;
      }
   </style>

   <title><?php echo $name; ?></title>
   <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
   <meta name="keywords" content="<?php for ($i = 0; $i < count($meta_keywords); $i++) { echo strtolower($meta_keywords[$i]); if ($i !== count($meta_keywords)-1) echo ", "; } ?>" />
   <meta name="description" content="<?php echo $meta_desc; ?>" />
</head>
<body>

	<div id="container">
		<table border="0" width="600px" style="margin-left: auto; margin-right: auto;">
		<tr>
		<td width="80%">
			<div style="font-size: 1.8em; color: #000; text-align: left; font-weight: bold; padding-bottom: 5px;"><?php echo $name; ?></div>
	      <div align="center" style="font-size: 0.9em; color: #666;">
				<table border="0" style="text-align: left; padding: 0 25px;">
				<tr>
					<td valign="top">
						<img src="images/work.png" alt="work" />
					</td>
					<td>
						<?php for ($i = 0; $i < count($curr_work); $i++) { echo '' . $curr_work[$i]['position'] . ' at <a href="' . $curr_work[$i]['link'] . '"">' . $curr_work[$i]['place'] . '</a><br />'; } ?>
					</td>
				</tr>
			
				<tr>
					<td valign="top">
						<img src="images/education.png" alt="education" />
					</td>
					<td>
						<?php 
						foreach ($edu as $school) { 
							echo 'Studying ';
							if (count($school['fields']) == 1)
							{
								echo '<a href="' . $school['fields'][0]['link'] . '">' . $school['fields'][0]['name'] . '</a>';
							}
							else
							{
								$string = '';
								for ($i = 0; $i < count($school['fields']); $i++) 
								{ 
									if ($i !== count($school['fields'])-1)
									{
										$string .= '<a href="' . $school['fields'][$i]['link'] . '">' . $school['fields'][$i]['name'] . '</a>, ';
									}
									else
									{
										$string = substr($string,0,-2);
										$string .= ' and <a href="' . $school['fields'][$i]['link'] . '">' . $school['fields'][$i]['name'] . '</a>';
									}
								}
							
								echo $string;
							}
							echo ' at <a href="' . $school['link'] . '">' . $school['name'] . '</a> (' . $school['year'] . ')';
						}
						?>
					</td>
				</tr>
			
				<tr>
					<td valign="top">
						<img src="images/projects.png" alt="projects" />
					</td>
					<td valign="top">
						<?php 
						echo 'Currently Working On ';
						if (count($curr_proj) == 1)
						{
							echo '<a href="' . $curr_proj[0]['link'] . '">' . $curr_proj[0]['name'] . '</a>';
						}
						else
						{
							$string = '';
							for ($i = 0; $i < count($curr_proj); $i++)
							{
								if ($i !== count($curr_proj)-1)
								{
									$string .= '<a href="' . $curr_proj[$i]['link'] . '">' . $curr_proj[$i]['name'] . '</a>, ';
								}
								else
								{
									$string = substr($string, 0, -2);
									$string .= ' and <a href="' . $curr_proj[$i]['link'] . '">' . $curr_proj[$i]['name'] . '</a>';
								}
							}
							
							echo $string;
						}
						?>
					</td>
				</tr>
			
				<tr>
					<td valign="top">
						<img src="images/resume.png" alt="resume" />
					</td>
					<td valign="top">
						<a href="resume.pdf">R&eacute;sum&eacute;</a> as of <?php echo date ("F jS Y", filemtime("resume.pdf")); ?><br />
                  My portfolio on <a href="http://cargocollective.com/sluzorz">Cargo Collective</a>.
					</td>
				</tr>
				</table>
			</div>
		
		</td>
		<td width="20%">
	      <div style="margin-top: 15px;">
	         <?php for ($i = 0; $i < count($profiles); $i++) { echo '<a href="' . $profiles[$i]['link'] . '"><img src="images/' . $profiles[$i]['name'] . '.png" alt="' . $profiles[$i]['name'] . '" style="padding: 10px;" border="0" /></a>'; if (($i % 3) == 0 && $i !== 0) echo '<br />'; } ?>
	      </div>
		</td>
		</tr>
		</table>

      <hr style="margin: 15px 30px; border: 1px solid #666;" />

      <table align="center" width="90%" border="0" cellspacing="15px" style="font-size: 0.9em;">
      <tr>
			<td width="80px" valign="top" style="padding-right: 5px; border-right: 1px solid #000">
            <img src="images/announcement.png" />
         </td>

         <td valign="top" style="text-align: left;">
				<ul style="margin-left: -25px; margin-top: -5px;">
            	<?php foreach ($twitter as $twit) { echo '<li>'; echo preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>', $twit['text']); } ?> 
				</ul>
         </td>
      </tr>

		<tr>
         <td width="80px" valign="top" style="padding-right: 5px; border-right: 1px solid #000">
            <img src="images/awards.png" />
         </td>

         <td valign="top" style="text-align: left;">
            <?php foreach ($articles as $article) { echo '<a href=' . $article['link'] . '>' . $article['title'] . '</a> - <b>' . $article['publisher'] . ', ' . $article['date'] . '</b><br />'; } ?> 
         </td>
      </tr>

      <tr>
         <td width="80px" valign="top" style="padding-right: 5px; border-right: 1px solid #000;">
            <img src="images/history.png" />
         </td>

         <td valign="top" style="text-align: left;">
            <table border="0" cellspacing="15px">
            <tr>
               <td valign="top">
                  <img src="images/past_projects.png" />
               </td>
               <td valign="top">
						<ul style="margin-left: -25px; margin-top: -5px;">
                  	<?php foreach ($past_proj as $proj) { echo '<li>'; echo $proj; } ?>
						</ul>
               </td>
            </tr>
            
            <tr>
               <td valign="top">
                  <img src="images/past_work.png" />
               </td>
               
               <td valign="top">
						<ul style="margin-left: -25px; margin-top: -5px;">
                  	<?php foreach ($past_work as $work) { echo '<li>'; echo $work; } ?>
						</ul>
               </td>
            </tr>
            </table> 
         </td>
      </tr>
      </table>
   
   <div>
      <?php foreach ($keywords as $keyword) echo "#" . $keyword . " "; ?>
   </div>

   </div>
</body>
</html>
