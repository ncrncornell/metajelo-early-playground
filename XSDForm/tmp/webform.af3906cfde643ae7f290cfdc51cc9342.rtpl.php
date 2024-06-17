<?php if(!class_exists('raintpl')){exit;}?><?php if( $integration=='standalone' ){ ?><form id='xmlForm' action='<?php echo $action;?>' method='post'>
<?php } ?>

<input id='xmlContent' type='hidden' name='xmlContent' value='' />
<input id='xmlContentRootTypeName' type='hidden' name='xmlContentRootTypeName' value='<?php echo $rootElementTypeNameOnForm;?>' />
<input id='xmlFormIdentifier' type='hidden' name='xmlFormIdentifier' value='<?php echo $formIdentifier;?>' />
<input id='xmlContentRootElementName' type='hidden' name='xmlContentRootElementName' value='<?php echo $rootElementName;?>' />
<?php echo $formContent;?> 
<?php if( $integration=='standalone' ){ ?><hr/><input value="SEND" type='button' onClick="getXMLContent(this.form);"/></form>
<?php } ?>