<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <i class="fas fa-user-shield"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin Dashboard </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>HOME</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="viewstudent1.php">
    <i class="fa fa-user" aria-hidden="true"></i>
        <span>view student </span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="viewfaculty.php">
    <i class="fas fa-chalkboard-teacher"></i>
        <span>view faculty</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-graduate"></i>
        <span> admin  </span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> detials:</h6>
            
            <a class="collapse-item" href="faculty.php">add faculty</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->




<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-chalkboard-teacher"></i>
        <span> faculty </span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="viewstudent.php">Add  student   </a>
            <a class="collapse-item" href="assi-status.php">view assignment status</a>
      
        </div>
    </div>
</li>




</ul>
<!-- End of Sidebar -->