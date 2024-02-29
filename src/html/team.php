<script>
function getHTMLStringForBio(bioNum){
	<?php 
		$path = 'resources/team-members/team-member-bios/';
		$files = glob("$path*.{html}", GLOB_BRACE);
		$x = 0;
		foreach($files as $file) {
			echo "if (bioNum == $x) { return ";
			// echo "$file";
			$myfile = fopen($file, "r") or die("Unable to open file!");
			// $output = fread($myfile,filesize($myfile));
			$output = json_encode(file_get_contents($file));
			echo $output;
			fclose($myfile);
			// $output = readfile($file);
			// echo htmlspecialchars($output);
			echo "};\n";
			$x++;
		}
		$x1=$x-1;
		echo "}\ndata_highest_bio_num = $x1;\n"
	?>
function getWrappedBio(bioNum){
	return "<div id='active-bio' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section'>\n"
			+ getHTMLStringForBio(bioNum)
			+ "\n</div>";
}
</script>
<div class="wrapper">
<section id="team" class="section-header-javascriptTarget">
	<h2>Our Team</h2>
</section>
</div>
<div class="container">
</div>
<div class="container">
	<?php
		$files = glob('resources/team-members/team-members-md/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		function makeBio($num){
			return
				"<div id='active-bio' class='collapse col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section'>
				</div>";
		}
		$x = 0;
		foreach($files as $file) {
			echo
				"<div id='bioholder_$x' onclick='collapseAllBut($x)'>
					<div class='col-md-2 col-lg-2 col-sm-2 col-xs-4'>
						<div class='team-member'>
							<div class='team-member-mouseover-box'>
							</div>
							<img id='photo$x' class='img-responsive team-member-photo' src=$file>
						</div>
					</div>
				</div>";
			$x++;
		}
	?>
</div>
<div style="height: 50px;"></div>
