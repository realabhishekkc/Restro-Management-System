<?php 
if(!isset($_SESSION['admin-id'])){
    header ('Location: ../login');
    exit;
}
?>
<div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

     <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Restro Management System
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="admin.php">
                <i class="fa fa-user"></i>
                    <p>Admin Profile</p>
                </a>
            </li>
            <li>
                <a href="add-admin.php">
                <i class="fa fa-user-plus"></i>
                    <p>Add Admin</p>
                </a>
            </li>
            <li>
                <a href="view-users.php">
                <i class="fa fa-users"></i>
                    <p>View Registered Users</p>
                </a>
            </li>
            <li>
                <a href="view-admins.php">
                <i class="fa fa-address-card"></i>
                    <p>View Registered Admins</p>
                </a>
            </li>
            <li>
                <a href="product-add.php">
                <i class="fa fa-cart-plus"></i>
                    <p>Add Food Item</p>
                </a>
            </li>
            
            <li>
                <a href="view-product.php">
                <i class="fa fa-list"></i>
                    <p>View Items</p>
                </a>
            </li>
            <li>
                <a href="view-contact.php">
                <i class="fa fa-comment"></i>
                    <p>View Contact</p>
                </a>
            </li>
            <li>
                <a href="view-order.php">
                <i class="fa fa-list-alt"></i>
                    <p>View All Orders</p>
                </a>
            </li>
        </ul>
    </div>
</div>