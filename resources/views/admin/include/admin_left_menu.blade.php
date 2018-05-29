
<!-- Menu -->
<div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('admin_index') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl4">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Service <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('service') }}">Add New Service</a></li>
                                <li><a href="{{ route('allservice') }}">All Services</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl5">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Subservice <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('subservice') }}">Add New Subservice</a></li>
                                <li><a href="{{ route('allsubservice') }}">All Subservice</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl8">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shop<span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('shop') }}">Add New Shop</a></li>
                                <li><a href="{{ route('allshops') }}">All Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl6">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Projects <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('projects') }}">Add New Projects</a></li>
                                <li><a href="{{ route('allprojects') }}">All Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl7">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Partners <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('partners') }}">Add New Partners</a></li>
                                <li><a href="{{ route('allpartners') }}">All Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>