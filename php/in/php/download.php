		<?php
        if(isset($_GET['action'])&&$_GET['action']=="download")
        {
            $filename=iconv("utf-8",'gb2312',$_GET['fname']);
            $url="download/".$filename;
            ob_clean();
            $file=fopen($url,"r");
            header("Content-type:application/octet-stream");
            header("Accept-Range:bytes");
            header("Accept-Length:".filesize($url));
            header("Content-Disposition:attachment;filename=".$filename);
            echo fread($file,filesize($url));
            fclose($file);
            exit();
        }
        ?>