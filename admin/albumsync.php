<?php
function movephotosfromhome() {
        $src = "/home/photos/";  // source folder or file
        $dest = "/mnt/volume_sfo2_01/mampa_album";   // destination folder or file
        if (shell_exec("cp -r $src $dest")) {
                echo "Executed successfully";
                if (shell_exec("rm -r $src")) {
                  echo "Origin files has been removed from ".$src;
                } else {
                  echo "Files on source can't be deleted";
                }
        } else {
                echo "Something went wrong";
        }
}
?>
