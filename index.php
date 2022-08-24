<?php include "inc/programming.php" ?>
<?php 
if (isset($_POST['save_btn'])) {
    $f_name=$_FILES['file_name']['name'];
    $f_t_name=$_FILES['file_name']['tmp_name'];
    $time=time();
    mkdir("upload/".$time);
    $done=move_uploaded_file($f_t_name, "upload/$time".".xml");
    if ($done) {

    $fileContents= file_get_contents("upload/".$time.".xml");

    $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

    $fileContents = trim(str_replace('"', "'", $fileContents));

    $simpleXml = simplexml_load_string($fileContents);

    $json = json_encode($simpleXml);
    $json = json_decode($json);
    // var_dump($json->mod_ip_address_list);
    foreach ($json->mod_ip_address_list as $value) {
    $ipaddress_name= $value->ipaddress_name;
    $ipaddress_addr= $value->ipaddress_addr;
    $create_at=date("Y-m-d");
    $file_name=$ipaddress_name."_".$ipaddress_addr.".bat";
    $myfile = fopen("upload/".$time."/".$file_name, "w") or die("Unable to open file!");
    $txt = "@echo off\n";
 $txt .= "color 0A\n";
 $txt .= "title Mine Systems VNC Launcher\n";
 $txt .= "set machinename=".$ipaddress_name."\n";
 $txt .= "set machineip=".$ipaddress_addr."\n";
 $txt .= "set username=technician\n";
 $txt .= "set password=spycam1\n";
 $txt .= "set version=unknown\n";
 $txt .= "echo                     _     _         _   ___   _             _\n";
 $txt .= "echo  /\  /\   1  1\ 1  1_    1_   \ /  1_    1   1_   /\  /\   1_\n";
 $txt .= "echo /  \/  \  1  1 \1  1_    __1   1   __1   1   1_  /  \/  \  __1\n";
 $txt .= "echo.\n";
 $txt .= "echo Connecting to %machinename% which is running terrain version %version% ...\n";
 $txt .= "echo.\n";
 $txt .= "ping %machineip% -n 2\n";
 $txt .= "tracert %machineip%\n";
 $txt .= '"C:\Program Files\uvnc bvba\UltraVNC\vncviewer.exe" -connect %machineip%:15900 /password %password%';
 $txt .= "\npause\n";
    fwrite($myfile, $txt);
    fclose($myfile);
        $ins=$conn->query("INSERT INTO data_list(ipaddress_name,ipaddress_addr,xml_file,file_name,create_at) VALUES('$ipaddress_name','$ipaddress_addr','$time','$file_name','$create_at')");
    }
    echo "<script>window.location='view.php'</script>";
}

   
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "inc/css_link.php" ?>
    </head>

    <body>
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
            
            <div class="sidebar-wrapper">
                <?php include "inc/left_side.php" ?>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <?php include "inc/top_bar.php" ?>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-big-boy">
                                <div class="card-header ">
                                    <h4 class="card-title">Upload XML File</h4>
                                    <p class="card-category">Upload XML File with same parameters</p>
                                </div>
                                <div class="card-body table-full-width">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="">Choose XML File</label>
                                        <input type="file" accept=".xml" name="file_name" class="form-control" required>
                                        <br>
                                        <button type="submit" name="save_btn" class="btn btn-success">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-plugin">
        <?php include "inc/left_side_setting.php" ?>
    </div>
</body>
<?php include "inc/js_link.php" ?>
</html>
