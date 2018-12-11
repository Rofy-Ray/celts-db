// $(document).ready(function() {
//   // document.location='../index.php'
//   self.opener.parent.document.getElementById('error_msg').innerHTML = 'Password is incorrect.';
// }

window.onload = function(){
<iframe name="mySource" src="../index.php" style="display: none;"></iframe>
var myDocument = window.mySource.document;
var myTitle = myDocument.getElementById("error_msg");
document.write(myTitle.innerHTML);
}
