<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agni Solar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css"/>
        <script>var BASE_URL = "<?php echo base_url(); ?>";</script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>/js/jquery-1.11.1.js"></script>       
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
        

    </head>
    <body class="login-bg">
        <div class="container">
            <div class="row">
                <div>
                    <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
                    <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
                    <a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
                    <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
                    <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |		 
                    <a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
                    <a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a>

                    <a href="<?php echo site_url('login/logout'); ?>" style="float:right"> Logout </a>

                </div>
                <div style='height:20px;'></div> 
                <div class="col-md-12">
                    <h4>Users</h4>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th><input type="checkbox" id="checkall" /></th>
                                <th>Role-Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile</th>
                            </thead>
                            <tbody>
                                <?php foreach($users as $each_user): ?>
                                <tr>
                                    <td><input type="checkbox" class="checkthis" /></td>
                                    <td><?php echo $each_user['roleId']; ?></td>
                                    <td><?php echo $each_user['fName']; ?></td>
                                    <td><?php echo $each_user['lName']; ?></td>
                                    <td><?php echo $each_user['mobileNumber']; ?></td>
                                    <td>
                                      <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"  href="<?php echo base_url(); ?>users/edit_user/<?php echo $each_user['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                    <td>
                                       <button class="btn btn-primary btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"  href="<?php echo base_url(); ?>users/delete_user/<?php echo $each_user['id']; ?>"><span class="glyphicon glyphicon-trash"></span></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        <ul class="pagination pull-right">
                            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                </div>
                <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
        </div>
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/login.js"></script>
    </body>
</html>
