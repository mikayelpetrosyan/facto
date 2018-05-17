
<!-- Menu -->
<div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('admin_index') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl8">
                        <i class="fa fa-tag" aria-hidden="true"></i> Categories <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('category') }}">Add New Category</a></li>
                                <li><a href="{{ route('allcategory') }}">All Category</a></li>
                                <li><a href="{{ route('subcategory') }}">Add New Subcategory</a></li>
                                <li><a href="{{ route('allsubcategory') }}">All Subcategory</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl3">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Apps <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('apps') }}">Add New Apps</a></li>
                                <li><a href="{{ route('allapps') }}">All Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl4">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Service <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('service') }}">Add New Service</a></li>
                                <li><a href="{{ route('allapps') }}">All Services</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl5">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Add Subservice <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('subservice') }}">Add New Subservice</a></li>
                                <li><a href="{{ route('allapps') }}">All Subservice</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>