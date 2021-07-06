<?php
 function inputElement($icon,$placeholder,$name,$value){
 	$ele="

 	<div class=\"input-group mb2\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text bg-warning\">$icon</div>
                </div>
                <input type=\"text\" name='$name'value='$value' class=\"form-control\" id=\"inlineFormInputGroup\" autocomplete=\"off\" placeholder='$placeholder'>
              </div> 
 	";
 	echo $ele;
 }

function buttonElement($btnid,$styleclass,$text,$name,$attr){
	$btn = "
	<button name='$name''$attr' class='$styleclass' id='$btnid'>$text</button>
	";
	echo $btn;
}
?>