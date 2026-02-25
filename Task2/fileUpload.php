<?php
echo "hi<br/>";
// $target_file=$target_dir.basename($_FILES[""])

    echo "hi<br/>";
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES["item"]["name"]);
    if(move_uploaded_file($_FILES["item"]["tmp_name"],$target_file)){
        echo "file uploaded successfully<br/>";
        echo "<a href='download.php?file=" . urlencode($_FILES["item"]["name"]) . "'>
                    <button>Download File</button>
                  </a>";
    }
    else{
        echo "failed";
    }
    
?>