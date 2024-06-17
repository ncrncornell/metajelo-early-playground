<?php if(!class_exists('raintpl')){exit;}?><div id='<?php echo $id;?>Field' class='field'><label class='fieldLabel' for='<?php echo $id;?>'><?php echo $title;?><?php if( $required==true ){ ?>*<?php }else{ ?>(Optional)<?php } ?>:</label>
<label class='fieldDesc' ><?php echo $description;?></label>
<?php if( $enumeration!=null ){ ?><select class="inpfield" name='<?php echo $id;?>' onblur="setValueOnHTML('<?php echo $id;?>','select');">
<?php $counter1=-1; if( isset($enumeration) && is_array($enumeration) && sizeof($enumeration) ) foreach( $enumeration as $key1 => $value1 ){ $counter1++; ?>

<option value="<?php echo $value1;?>"  <?php if( $value1 ==$xmlValue ){ ?>selected="true"<?php } ?> ><?php echo $value1;?></option>
<?php } ?>

</select>
<?php }else{ ?>

 <?php if( $base=='string' || $base=='xs:string' ||$base=='int' || $base=='xs:integer' || $base=='integer' ){ ?>

<input base="text" name="<?php echo $id;?>" class="inpfield"  value="<?php echo $xmlValue;?>" onblur="setValueOnHTML('<?php echo $id;?>','text');"/>
 <?php }elseif( $base=='boolean' ){ ?>

<input type="checkbox" name="<?php echo $id;?>" value="<?php echo $name;?>" checked="<?php echo $value;?>" onblur="setValueOnHTML('<?php echo $id;?>','checkbox');"/>
 <?php }else{ ?>

<input type="text" name="<?php echo $id;?>" class="inpfield"  value="<?php echo $xmlValue;?>"/>
 <?php } ?>

<?php } ?>

</div>