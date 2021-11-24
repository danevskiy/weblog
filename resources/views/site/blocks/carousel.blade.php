

<div class="sliderMedia">	
<div class="slider-top">
@foreach ($block->children as $child)
<img src="{{ $child->image('image') }}" >
@endforeach
</div>
<?php
$varCount = 1;

?>
<div class="nav-bottom">
@foreach ($block->children as $child)

<img src="{{ $child->image('image') }}" <?php if($varCount == 1){ echo 'class="active"';} ?>>

<?php
$varCount++;
?>
@endforeach
</div>
</div>
