<!-- *************************************************************
The primary layout page simply sandwiches the current view between
the header and footer templates.  Nav could be included here if it
is truly universal, but can also be loaded on each view page.
************************************************************** -->
<?php echo $this->render('header.htm',$this->mime,get_defined_vars()); ?>
<?php echo $this->render($view,$this->mime,get_defined_vars()); ?>
<?php echo $this->render('footer.htm',$this->mime,get_defined_vars()); ?>
