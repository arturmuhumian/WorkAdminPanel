<div class="admin">
      <div class="mdl1">
        <p class="close">X</p>
        <p style = "text-align: center; font-size: 22px; margin-top: 50px;">Выйти из профиля?</p>
        <form method="post">
          <input type="submit" value="Да" class="yes"  name="exitfromaccout">
          <input type="submit" value="Нет" class="no"  name="">
        </form>
      </div>
    </div>
  <div class="js"></div>
   
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Панель управления</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="../img/user.jpg" alt="avatar" width="32px" height="32px"></a></li> 
        <li>
          <a href="#exit" type="button" class="admin-exit">
            <?php 
              require_once "../php/setter.php";
              $getname = new WorkForm();
              echo $getname->getUserName();
            ?>
          </a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<script>
   $(document).ready(function(){
    $(".admin-exit").click(function(){
        $(".mdl1").show();
        $(".js").show();
         });
       
   $(".close").click(function(){
        $(".mdl1").hide();
        $(".js").hide();
        

    });
    $(".no").click(function(){
        $(".mdl1").hide();
        $(".js").hide();
    });
    
});
       </script>