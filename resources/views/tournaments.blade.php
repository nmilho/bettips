@extends('layouts.master')

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
                <?php echo '<a href="tournament/details/'.explode(':', $t->id)[2].'">'.$t->name.'</a>'; ?>
            </div>
         </div>
<?php
    }
?>



</section>
<?php
}
?>


@endsection