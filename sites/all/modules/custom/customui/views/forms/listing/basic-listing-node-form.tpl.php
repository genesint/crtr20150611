<?php
module_load_include('inc', 'node', 'node.pages');
global $user;
$node = (object) array(
    'uid' => $user->uid,
    'name' => (isset($user->name) ? $user->name : ''),
    'type' => 'listing',
    'language' => LANGUAGE_NONE,
);
$nid=empty($_GET['nid'])?"":$_GET['nid'];
if($nid!=""){
    $node=node_load($nid);
}
$form = drupal_get_form('listing_node_form', $node);
$form["field_telephone"]['#access'] = 0;
$form["field_fax"]['#access'] = 0;
$form["field_street_address"]['#access'] = 0;
$form["field_city"]['#access'] = 0;
$form["field_country"]['#access'] = 0;
$form["field_listing_description"]['#access'] = 0;
$form["field_listing_location"]['#access'] = 0;
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <?php print drupal_render($form); ?>
    </div>
    <div class="col-md-4"></div>
</div>