<?php if(!class_exists('raintpl')){exit;}?><div id='<?php echo $idNext;?>HeaderRow' class='headerNextRow indent_<?php echo $indentationLevel;?>'>
    <div id='<?php echo $idNext;?>DivCollapse' class='headerCollapse'><a id='<?php echo $idNext;?>DivCollapseButton' class='headerLastCollapse' onclick="javascript: toggleDiv('DivContent<?php echo $idNext;?>');"><img src="<?php echo $webDir;?>/img/expand.png" width="25" /></a></div>                            
    <div id='<?php echo $idNext;?>DivControl' class='headerTitle'> <?php echo $title;?> <a onClick="javascript: addElement('<?php echo $formIdentifier;?>','<?php echo $elementTypeName;?>','<?php echo $name;?>', '<?php echo $idNext;?>', '<?php echo $parentId;?>','<?php echo $elementId;?>','<?php echo $minOccurs;?>','<?php echo $maxOccurs;?>');"> <img src="<?php echo $webDir;?>/img/add.png" /> </a></div>
</div>
<div class='contentDiv' id='DivContent<?php echo $idNext;?>' ></div>

