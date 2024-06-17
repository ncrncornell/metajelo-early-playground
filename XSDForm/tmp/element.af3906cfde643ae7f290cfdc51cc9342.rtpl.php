<?php if(!class_exists('raintpl')){exit;}?><?php if( $elementCount!='-1' ){ ?>

<div id='<?php echo $elementId;?>' class='multipleElementContainer'>
<?php } ?>

<?php $counter1=-1; if( isset($content) && is_array($content) && sizeof($content) ) foreach( $content as $key1 => $value1 ){ $counter1++; ?>

<?php if( $elementClass=='complex' ){ ?>

<div id='<?php echo $value1["id"];?>HeaderRow' class='headerRow indent_<?php echo $indentationLevel;?>'>
    <div id='<?php echo $value1["id"];?>DivCollapse' class='headerCollapse'><a onclick="javascript: toggleDiv('DivContent<?php echo $value1["id"];?>');"><img src="<?php echo $webDir;?>/img/expand.png" width="25" /></a></div>                            
    <div id='<?php echo $value1["id"];?>DivControl' class='headerTitle'> <?php echo $title;?> <a onClick="javascript: addElement('<?php echo $formIdentifier;?>','<?php echo $elementTypeName;?>','<?php echo $name;?>', '<?php echo $value1["id"];?>', '<?php echo $parentId;?>','<?php echo $elementId;?>','<?php echo $minOccurs;?>','<?php echo $maxOccurs;?>');"> <img src="<?php echo $webDir;?>/img/add.png" /> </a>|<a onClick="javascript: if(checkMinOccurs('<?php echo $elementId;?>','<?php echo $minOccurs;?>')==false){alert('Can not remove required element'); return 0;} document.getElementById('<?php echo $value1["id"];?>HeaderRow').innerHTML='' ;  document.getElementById('DivContent<?php echo $value1["id"];?>').innerHTML='' ; $('#<?php echo $value1["id"];?>HeaderRow').removeClass('headerRow')  ; " > <img src="<?php echo $webDir;?>/img/remove.png" /> </a></div><div style="clear:both;"></div>
</div>
<div class='indent_<?php echo $indentationLevel;?>'><label class='fieldDesc' ><?php echo $description;?></label></div>
<?php } ?>

<div class='contentDiv' id='DivContent<?php echo $value1["id"];?>' ><?php echo $value1["html"];?></div>
<?php } ?>

<?php if( $elementCount!='-1' ){ ?>


<?php if( $elementClass=='complex' ){ ?>

<div id='<?php echo $idNext;?>HeaderRow' class='headerNextRow indent_<?php echo $indentationLevel;?>'>
    <div id='<?php echo $idNext;?>DivCollapse' class='headerCollapse'><a id='<?php echo $idNext;?>DivCollapseButton' class='headerLastCollapse' onclick="javascript: toggleDiv('DivContent<?php echo $idNext;?>');"><img src="<?php echo $webDir;?>/img/expand.png" width="25" /></a></div>                            
    <div id='<?php echo $idNext;?>DivControl' class='headerTitle'> <?php echo $title;?> <a onClick="javascript: addElement('<?php echo $formIdentifier;?>','<?php echo $elementTypeName;?>','<?php echo $name;?>', '<?php echo $idNext;?>', '<?php echo $parentId;?>','<?php echo $elementId;?>','<?php echo $minOccurs;?>','<?php echo $maxOccurs;?>');"> <img src="<?php echo $webDir;?>/img/add.png" /> </a></div>
</div>
<div class='contentDiv' id='DivContent<?php echo $idNext;?>' ></div>
<?php } ?>

</div>
<?php } ?>


