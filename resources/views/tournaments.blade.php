@extends('layouts.layout')

@section('content')

<!-- Services Section -->
<?php 
if(isset($tournaments)) { 
?>

<section id="tournaments">

<?php    
    foreach($tournaments as $t) { ?>
        
        <div class="row">
            <div class="col-md-12">
                <?php echo '<a href="tournament/details/'.explode(':', $t->id)[2].'"><i class="fa fa-futbol-o" aria-hidden="true"></i> '.$t->name.'</a>'; ?>
            </div>
         </div>
<?php
    }
?>


</section>
<?php
}
else {
	echo 'tournaments page';
}
?>


@endsection