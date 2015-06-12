<?php

$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
$content = empty($_GET['content']) ? "" : $_GET['content'];

#$output = field_view_field('node', $node, 'field_location_on_map');
#print $output[0]['#markup'];
//$display = array('label' => 'hidden');
//$view = field_view_field('node', $node, 'field_location_on_map', $display);
//print drupal_render($view);
?>

<div class="row">
    <div class="col-sm-4">
        <ul style="list-style: none">
            <li>
                <?php
                $view = field_view_field('node', $node, 'field_mobile');
                print drupal_render($view);
                ?>
            </li>
            <li>
                <?php
                $view = field_view_field('node', $node, 'field_e_mail');
                print drupal_render($view);
                ?>
            </li>
            <li>
                <?php
                $view = field_view_field('node', $node, 'field_acronym');
                print drupal_render($view);
                ?>
            </li>

            <li>
                <?php
                $view = field_view_field('node', $node, 'field_category');
                print drupal_render($view);
                ?>
            </li>

            <li>
                <?php
                $view = field_view_field('node', $node, 'field_organisation_type');
                print drupal_render($view);
                ?>

            </li>
            <li>
                <?php
                $view = field_view_field('node', $node, 'field_website');
                print drupal_render($view);
                ?>

            </li>
        </ul>
    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

    </div>
</div>

