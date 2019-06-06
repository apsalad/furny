<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';
?>
<div class="container" style="margin-top:15vh;margin-bottom:5vh;">
  <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="list-group">
        <a class="list-group-item list-group-item-action" onclick="show('addcat')">
          Add Product Category
        </a>
        <a class="list-group-item list-group-item-action" onclick="show('editcat')">
          Product Categories
        </a>
        <a class="list-group-item list-group-item-action" onclick="show('addpro')">
          Add Product
        </a>
        <a class="list-group-item list-group-item-action" onclick="show('editpro')">
           Products
        </a>
        <a class="list-group-item list-group-item-action" onclick="show('users')">
           View Users
        </a>
      </div>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-12">
      <div id="intro">
        <div class="jumbotron">
          <center class="h3">
            Welcome Admin, <?php echo $_SESSION['name'] ?>
          </center>
        </div>
      </div>
      <div id="users" style="display:none">
        <?php include 'users.php'; ?>
      </div>
      <div id="addcat" style="display:none">
        <?php include 'addcat.php'; ?>
      </div>
      <div id="editcat" style="display:none">
        <?php include 'cat.php'; ?>
      </div>
      <div id="addpro" style="display:none">
        <?php include 'addpro.php'; ?>
      </div>
      <div id="editpro" style="display:none">
        <?php include 'pro.php'; ?>
      </div>
    </div>

  </div>
</div>

<script>
  function show(n) {
    document.getElementById("intro").style.display="none";
    document.getElementById("addcat").style.display="none";
    document.getElementById("addpro").style.display="none";
    document.getElementById("editcat").style.display="none";
    document.getElementById("editpro").style.display="none";
    document.getElementById("users").style.display="none";
    document.getElementById(n).style.display="block";
  }
</script>
<?php include '../../includes/foot.php'; ?>
