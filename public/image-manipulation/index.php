<form enctype="multipart/form-data" method="post" action="image_upload_script.php">
Choose your file here:
<input name="uploaded_file" tmp_name="tmp" type="file"/><br /><br />
<input type="submit" value="Upload It"/>
</form>

<?php
	
if ($handle = opendir('uploads')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<img src='uploads/" . $entry ."' />\n";
        }
    }

    closedir($handle);
}	
?>