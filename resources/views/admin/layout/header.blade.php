<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <!-- Logo icon image, you can use font-icon also --><b>
                    <!--This is dark logo icon--><img src="admin/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="admin/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                </b>
                <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="admin/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="admin/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
            <li>
                <script>
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {

                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    }
                </script>

                <a href="#" onclick="myFunction()" class="dropbtn dropdown profile-pic" onclick="myFunction()"> <img src="admin/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave   <i class="fa fa-angle-down" onclick="toggleuser()"></i></b></a>

                <ul id="myDropdown" class="dropdown-content">
                    <li><a><i class="fa fa-user"></i> Account setting</a></li>
                    <li><a href="/logout"><i class="fa fa-user"></i> Sign out</a></li>
                </ul>

            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>