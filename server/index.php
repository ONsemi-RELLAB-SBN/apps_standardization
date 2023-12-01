<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Auto Loading Records</title>

        <link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <body class="">
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
                    <table id="example" class="display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ONDIC</th>
                                <th>username</th>
                                <th>name</th>
                                <th>email</th>
                                <th>title</th>
                                <th>site</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>HUHU</th>
                                <th>username</th>
                                <th>name</th>
                                <th>email</th>
                                <th>title</th>
                                <th>site</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!---->
    </body></html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').dataTable({
            "bProcessing": true,
            "sAjaxSource": "response.php",
            "aoColumns": [
                {mData: 'oncid'},
                {mData: 'username'},
                {mData: 'name'},
                {mData: 'email'},
                {mData: 'title'},
                {mData: 'site'}
            ]
        });
    });
</script>