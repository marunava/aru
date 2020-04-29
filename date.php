<?php
function nextdate() {
if(date('D') === 'wed' || date('D') === 'thu' || date('D') === 'fri' ){
echo date('Y-m-d', strtotime('next saturday'));
}
else {
echo date('Y-m-d', strtotime('next wednesday'));	
}
}
nextdate();
?>