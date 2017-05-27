<div class="container">
<div class="row">
<div class="col-xs-12">
<h2>Υπηρεσίες</h2>
<form action="" autocomplete="off" class="form-horizontal search-course" method="post" accept-charset="utf-8">
    <div class="input-group">
        <input name="searchtext" value="" placeholder="Βρες την υπηρεσία που σε ενδιαφέρει" class="form-control" type="text">
        <span class="input-group-btn">
           <button class="btn btn-default" type="submit" id="addressSearch">
               <span class="fa fa-search"></span>
           </button>
        </span>
    </div>
</form>
</div>
<div class="courses">
<?php 
foreach ($data['courses'] as $course) {  ?> 
    <div class="col-sm-3">
    <a href="<?php echo Config::get('base_url');?>courses/show/<?php echo $course->id;?>" class="course">
    <h2><?php echo $course->title;?></h2>
    <div class="profesion"><?php echo $course->description;?></div>
    <img class="img-responsive" src="<?php echo Config::get('base_url');?>uploads/<?php echo $course->photo;?>">
    </a>
    </div>    
<?php } ?>
</div>
</div>
</div>