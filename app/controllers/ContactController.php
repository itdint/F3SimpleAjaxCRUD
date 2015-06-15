<?php

class ContactController extends Controller {

  // Initialize the template for viewing classes
  function afterroute() {
    echo Template::instance()->render('layout.htm');
  }

  public function contactList() {
    $this->f3->set('page_head','AJAX Contact List');
    $this->f3->set('view','contact/contactlist.htm');
  }

}
