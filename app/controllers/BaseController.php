<?php

class BaseController extends Controller {

  // Initialize the template for viewing classes
  function afterroute() {
    echo Template::instance()->render('layout.htm');
  }

  public function index() {
    $this->f3->set('page_head','Sample F3 Application Home');
    $this->f3->set('view','base/home.htm');
  }

}
