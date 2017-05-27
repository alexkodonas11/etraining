<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="pull-right price"></div>
<h1><?php echo $data['course']->title;?></h1>
<p><?php echo $data['course']->description;?></p>
<div class="social-icons pull-right">
<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-facebook"></i></a>
<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-twitter"></i></a>
<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-instagram"></i></a>
<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-youtube"></i></a>
</div>
<a href="#" class="btn btn-primary btn-lg">Αγόρασε το <?php echo $data['course']->price;?>€ </a> 
</div>
<div class="col-sm-4">
<img class="img-responsive" src="<?php echo Config::get('base_url');?>uploads/<?php echo $data['course']->photo;?>.jpg">
</div>
</div>
</div>

