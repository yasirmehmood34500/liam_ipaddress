<?php include "inc/programming.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "inc/css_link.php" ?>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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
                                    <h4 class="card-title">View</h4>
                                    <p class="card-category">View List</p>
                                    <div class="pull-right">
                                        <?php $i=1; $fet=$conn->query("SELECT * FROM data_list WHERE status=1"); ?>
                                        <?php if ($fet->num_rows > 0): ?>
                                            <a href="delete.php" class="btn btn-danger">Delete All</a>
                                        <?php endif ?>
                                                                            </div>
                                </div>
                                <div class="card-body table-full-width">
                                    <table class="table table-bigboy" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Addr</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php while ($row=$fet->fetch_array()) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td><?php echo $row['ipaddress_name'] ?></td>
                                                <td><?php echo $row['ipaddress_addr'] ?></td>
                                                <td>
                                                    <a href="upload/<?php echo $row['xml_file'] ?>/<?php echo $row['file_name'] ?>" download="">Download</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>
