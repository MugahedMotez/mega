<?php if(count($erorrs) > 0):?>
<div style="width: 80%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid red;
    background: #a94442;
    border-radius: 5px;
    text-align: center;
    color: #fff;">
	<?php foreach ($erorrs as $erorr):?>
		<P><?php  echo $erorr;?></P>
<?php endforeach ?>
</div>
<?php endif ?>
