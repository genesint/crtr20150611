<?php
module_load_include('inc', 'customui', 'common');
$categories = getCategories();
$limit=36;
?>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-9">
        <div class="jumbotron">
            <h1>Uganda Directory</h1>
            <p></p>
            <p><a href="#" class="btn btn-primary btn-lg" role="button">Sign up for free!</a></p>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <h4>Browse by category</h4>
    </div>
    <div class="col-md-1">
    </div>
</div>
<div class="row categories">
    <div class="col-md-1">
    </div>
    <div class="col-md-3">
        <?php
        for($i=0;$i<$limit;$i++){
            if($i % 3 == 0){
                $node=node_load($categories[$i]);
                print '<a href="">'.$node->title."</a><br>";
            }
        }
        ?>
    </div>
    <div class="col-md-3">
        <?php
        for($i=0;$i<$limit;$i++){
            if($i % 3 == 1){

                $node=node_load($categories[$i]);
                print '<a href="">'.$node->title."</a><br>";
            }
        }
        ?>
    </div>
    <div class="col-md-3">
        <?php
        for($i=0;$i<$limit;$i++){
            if($i % 3 == 2){

                $node=node_load($categories[$i]);
                print '<a href="">'.$node->title."</a><br>";
            }
        }
        ?>
    </div>


    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-3">
        <a type="button" class="btn btn-default">More »</a>
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-1">
    </div>
</div>