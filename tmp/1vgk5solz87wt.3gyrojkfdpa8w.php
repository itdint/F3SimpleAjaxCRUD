<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $BASE.'/'.$UI; ?>" />
    <title><?php echo $site; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Twitter Bootstrap CDN Links -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- getting the FontAwesome pack - bootstraps icon set sucks -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- app specific css -->
    <link href="../../ui/css/custom.css" rel="stylesheet" media="screen">
  </head>

  <body>
  <!-- Global navigation file -->
  <?php echo $this->render('nav.htm',$this->mime,get_defined_vars()); ?>
    <div class="container">
      <!-- generic bootstrap message window to show error messages -->
      <?php if ($message): ?>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php echo $message; ?></strong>
        </div>
      <?php endif; ?>
