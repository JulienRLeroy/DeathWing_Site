<?php
	$site = new DB();
	$req = $site->ReturnSite()->query("SELECT * FROM module_news order by id limit 3");
	while($option = $req -> fetch()){
?>
<div class="col-md-12">
	<div class="col-md-12 news">
		<div class="col-md-6">
			<span class="news_title"> <?php echo $option['titre']; ?> </span>
		</div>
		<div class="col-md-6 right">
			<span class="news_date"> <?php echo $option['date']; ?> </span>
		</div>
		<div class="col-md-12 description_news">
			<span class="news_text">	<?php echo $option['text']; ?> </span>
		</div>
	</div>
</div>
<?php
	}
?>
