<?php
	// TODO: Load images from API
?>

<div class="accordion">
	<?php foreach ($patients as $patient): ?>
		<div class="patient">
			<div class="accordion-toggle">
				<h2><?php print $patient['id']; ?></h2>
				<p><?php print $patient['date']; ?></p>
			</div>
			<div class="accordion-content">
				<h3>April 2015</h3>
				<div class="card">
					<h4>April 02</h4>
					<ul class="sortable image-wrapper clearfix">
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/1.jpg" alt="Patient Photo" /></li>
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/2.jpg" alt="Patient Photo" /></li>
					</ul>
				</div>
				<h3>March 2015</h3>
				<div class="card">
					<h4>March 02</h4>
					<ul class="sortable image-wrapper clearfix">
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/1.jpg" alt="Patient Photo" /></li>
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/2.jpg" alt="Patient Photo" /></li>
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/3.jpg" alt="Patient Photo" /></li>
					</ul>
				</div>
				<div class="card">
					<h4>March 01</h4>
					<ul class="sortable image-wrapper clearfix">
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/1.jpg" alt="Patient Photo" /></li>
					</ul>
				</div>
				<h3>January 2015</h3>
				<div class="card">
					<h4>January 30</h4>
					<ul class="sortable image-wrapper clearfix">
						<li><img src="/sites/all/images/ajax-loader.gif" data-src="/sites/default/files/gallery/1.jpg" alt="Patient Photo" /></li>
					</ul>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>