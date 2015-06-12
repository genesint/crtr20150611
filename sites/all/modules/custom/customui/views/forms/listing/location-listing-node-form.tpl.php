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
$form = drupal_get_form('listing' . '_node_form', $node);
$form["title"]['#access'] = 0;
$form["field_mobile"]['#access'] = 0;
$form["field_e_mail"]['#access'] = 0;
$form["field_acronym"]['#access'] = 0;
$form["field_category"]['#access'] = 0;
$form["field_organisation_type"]['#access'] = 0;
$form["field_website"]['#access'] = 0;
$form["field_logo"]['#access'] = 0;
$form["field_telephone"]['#access'] = 0;
$form["field_fax"]['#access'] = 0;
$form["field_street_address"]['#access'] = 0;
$form["field_city"]['#access'] = 0;
$form["field_country"]['#access'] = 0;
$form["field_listing_description"]['#access'] = 0;
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php print drupal_render($form); ?>
    </div>
    <div class="col-sm-1"></div>
</div>