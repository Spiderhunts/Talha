 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="CreateForm.php">Add User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
          <li><a class="nav-link">Welcome<?php echo $_SESSION["name"] ?></a></li>
         
          <?php if($_SESSION["name"] != null){ ?>
          <li><a class="nav-link" href="Logout.php">Logout</a></li>
          <?php }?>
   </ul>
</nav>