<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User List</title>

        <link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Phpflow.com</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="">
                <h1>Data Table</h1>
                <div class="">
<!--                    <table id="example" class="display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ONCID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Designation</th>
                                <th>Site</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ONCID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Designation</th>
                                <th>Site</th>
                            </tr>
                        </tfoot>
                    </table>-->
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ONCID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Designation</th>
                                <th>Site</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ONCID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Designation</th>
                                <th>Site</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        new DataTable('#example', {
            ajax: 'get_user.php',
            processing: true,
            serverSide: true
        });
    });
</script>