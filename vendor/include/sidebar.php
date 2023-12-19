<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">
                <a href="#" class="text-body fw-medium font-size-16"><?php
                                                                        echo  $_SESSION['user_info']['u_fullname'];
                                                                        ?></a>
                <p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php" class="waves-effect">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-profile.php">Profile</a></li>
                        <li><a href="myshop.php">MyShop</a></li>
                        <li><a href="#">Invoice</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php">Inbox</a></li>
                        <li><a href="email-read.php">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Task List</a></li>
                        <li><a href="#">Kanban Board</a></li>
                        <li><a href="#">Create Task</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-message-alt-dots"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Messages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="chat.php">Chat</a></li>
                        <li><a href="tasks-list.html">Inbox</a></li>
                        <li><a href="tasks-kanban.html">New Message</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-cart-alt"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-gear"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="profile-setting.php">Profile Settings</a></li>
                        <li><a href="shop-setting.php">Shop Settings</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="../home.php" class="waves-effect">
                    <i class="bx bx-left-arrow-alt"></i>
                        <span>Exit</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>