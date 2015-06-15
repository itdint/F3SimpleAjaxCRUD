<!-- code for standard bootstrap fixed top navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $BASE.'/'; ?>"></span>F3 Ajax Simple Crud</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <!-- Primary Nav with checks to set active links -->
      <ul class="nav navbar-nav">
        <li <?php if ($page_head == 'F3 Home'): ?>class="active"<?php endif; ?>><a href="<?php echo $BASE.'/'; ?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
        <li <?php if ($page_head == 'Ajax Contact List'): ?>class="active"<?php endif; ?>><a href="<?php echo $BASE.'/contactlist'; ?>"><i class="fa fa-envelope"></i> AJAX Contact List</a></li>
      </ul>
      <!-- right aligned navbar - good for account, social, etc.. -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $BASE.'/#'; ?>"><i class="fa fa-facebook-square fa-lg"></i></a></li>
        <li><a href="<?php echo $BASE.'/#'; ?>"><i class="fa fa-twitter-square fa-lg"></i></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
