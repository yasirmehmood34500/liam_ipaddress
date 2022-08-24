<?php include "inc/programming.php" ?>
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
                                    <h4 class="card-title">Sample</h4>
                                    <p class="card-category">Sample Detail</p>
                                </div>
                                <div class="card-body table-full-width">
                                    <table class="table table-bigboy">
                                        <thead>
                                            <tr>
                                                <th>Thumb</th>
                                                <th>Blog Title</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.
                                                </td>
                                                <td>30/08/2016</td>
                                                <td>
                                                    1,225
                                                </td>
                                            </tr>
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
</html>
