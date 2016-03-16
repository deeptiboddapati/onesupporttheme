<?php
$title=get_field("title");
$image=get_field("image");
$subheading=get_field("sub_heading");
$text=get_field("text");
$buttonone =get_field("buttonone");
$buttontwo = get_field("buttontwo");
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				<?php echo $title ?>
			</h3>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 centerchildren">
					<img alt="<?php echo $image['alt'] ?>" src="<?php echo $image['sizes']['medium'] ?>" />
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 centerchildren ">
					<h3>
						<?php echo $subheading ?>
					</h3>
					<?php echo $text ?>
					<button type="button" class="btn btn-primary btn-lg">
						<?php echo $buttonone ?>
					</button> 
					<button type="button" class="btn ">
						<?php echo $buttonone ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>