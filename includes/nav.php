<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <div class="logo"><img src="/static/asd.png"></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropsodown">
          <?php
            $sql = "select * from prodcat";
            $result = $conn->query($sql);
            if($result->num_rows>0){
              while ($row=$result->fetch_assoc()) {
          ?>
            <a class="dropdown-item">
              <form action="/view/product/index.php" method="post">
                <input type="submit" name="pcat" class="btn btn-link" value="<?php echo $row['catname']; ?>" style="color:black;text-decoration:none">
              </form>
            </a>
          <?php   }
               } ?>
        </div>
      </li>

       <div class="" style="position:absolute;right:0">
         <div class="my-auto" style="color:white;">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             <form class="form-inline my-2 my-lg-0" style="padding-left: 585px;">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </form>
             <?php if(isset($_SESSION['name'])){ ?>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php echo $_SESSION["name"]; ?>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="/out.php">Logout</a>
              <?php if($_SESSION['admin']==="1"){ ?>
               <a class="dropdown-item" href="/view/admin/index.php">Admin page</a>
             <?php } ?>
               </div>
             </li>
             <?php }else{ ?>
             <li class="nav-item" style="padding-left: 5px;">
              <a class="nav-link" href="/view/user/login.php">Log in</a>
             </li>

             <li class="nav-item" >
             <a class="nav-link" href="/view/user/signup.php">Sign Up</a>
             </li>
             <?php } ?>
             </ul>

         </div>
       </div>
      </ul>
  </div>
</nav>
