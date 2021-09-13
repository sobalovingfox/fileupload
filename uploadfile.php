<?php $ path = "files/"; $path = $path . basename( $_FILES['Davis']['Davis']);

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) { echo "Success uploading". basename($_FILES
['Davis']['Davis']); } else{ echo "Error when uploading file."; } ?>