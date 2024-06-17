<?php if(!class_exists('raintpl')){exit;}?><div id='<?php echo $id;?>Field' class='field'><label class='fieldLabel' for='<?php echo $id;?>'><?php echo $title;?><?php if( $required==true ){ ?>*<?php }else{ ?>(Optional)<?php } ?></label>
<label class='fieldDesc' ><?php echo $description;?></label>
<?php if( $type=='string' || $type=='int' || $type=='integer' ){ ?>

<input type="text" name="<?php echo $id;?>" class="inpfield"  value="<?php echo $value;?>" onblur="setValueOnHTML('<?php echo $id;?>','text');"/>
<?php }elseif( $type=='boolean' ){ ?>

<input type="checkbox" name="<?php echo $id;?>" value="<?php echo $name;?>" checked="<?php echo $value;?>" onblur="setValueOnHTML('<?php echo $id;?>','checkbox');"/>
<?php }else{ ?>

<input type="text" name="<?php echo $id;?>" class="inpfield"  value="<?php echo $value;?>" onblur="setValueOnHTML('<?php echo $id;?>','text');"/>
<?php } ?>

</div>