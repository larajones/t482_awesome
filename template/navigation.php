<nav class=" navbar navbar-default" role="navigation">
 <?php  if($debug == 1) { ?>
       <button id = "btn-debug"  class = "btn btn-default"><i class="fa fa-bug"></i></button>
<!--debug button-->
  <?php  } ?>
        <div class="container">
            <ul class="nav navbar-nav">
                <?php  nav_main($dbc, $pageid); ?>
                <li>
                    <a href="#">FAQ</a> 
                </li>
                <li>
                    <a href="#">Stuff</a> 
                </li>
            </ul>
        </div>
    </nav><!---end nav=-->
