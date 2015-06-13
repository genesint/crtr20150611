<?php
global $base_url;
global $user;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);

#$output = field_view_field('node', $node, 'field_location_on_map');
#print $output[0]['#markup'];
//$display = array('label' => 'hidden');
//$view = field_view_field('node', $node, 'field_location_on_map', $display);
//print drupal_render($view);
?>
<?php
if ($user->uid == $node->uid) {
  ?>
  <div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
	  <ul class="nav nav-tabs" role="tablist">
		<li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			Edit <span class="caret"></span>
		  </a>
		  <ul class="dropdown-menu" role="menu">
			<li><a
				href="basic-listing-node-form?nid=<?php echo $node->nid; ?>&iframe=1"
				target="listing-view-item-iframe">Basic information</a></li>
			<li><a
				href="description-listing-node-form?nid=<?php echo $node->nid; ?>&iframe=1"
				target="listing-view-item-iframe">About</a></li>
			<li><a
				href="contact-listing-node-form?nid=<?php echo $node->nid; ?>&iframe=1"
				target="listing-view-item-iframe">Contact information</a></li>
			<li><a
				href="location-listing-node-form?nid=<?php echo $node->nid; ?>&iframe=1"
				target="listing-view-item-iframe">Location</a></li>
			<li><a
				href="productsandservices-listing-node-form?nid=<?php echo $node->nid; ?>&iframe=1"
				target="listing-view-item-iframe">Products and services</a></li>
		  </ul>
		</li>
	  </ul>
	</div>
	<div class="col-md-1"></div>
  </div>
<?php
}
?>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
	<?php
	$display = array('label' => 'hidden');
	$view = field_view_field('node', $node, 'field_logo', $display);
	print drupal_render($view);
	?>
  </div>
  <div class="col-md-1"></div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10"><?php echo $node->title; ?></div>
  <div class="col-md-1"></div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
	<ul class="nav nav-pills nav-justified">
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/basic-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
		  target="listing-view-item-iframe">Basic information</a></li>
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/description-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
		  target="listing-view-item-iframe">About</a></li>
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/contact-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
		  target="listing-view-item-iframe">Contact information</a></li>
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/location-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
		  target="listing-view-item-iframe">Location on map</a></li>
	  <li role="presentation"><a
		  href="<?php echo $base_url; ?>/productsandservices-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
		  target="listing-view-item-iframe">Products and services</a></li>
	</ul>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
	<iframe class="listing-view-item-iframe"
			src="<?php echo $base_url; ?>/basic-listing-view-item?nid=<?php echo $node->nid; ?>&iframe=1"
			name="listing-view-item-iframe"></iframe>
  </div>
  <div class="col-md-1"></div>
</div>