<?php

class AjaxFunctions extends Controller {

  // no template call since we're only returning raw JSON data

  //***************************************************************
  //*  Contact Methods                                            *
  //*  getContacts, getContact, addContact,                       *
  //*  updateContact, delContact                                  *
  //***************************************************************
  public function getContacts() {
    $contact = new Contact($this->db);
    $response = $contact->all();
    print $this->json_encode_objs($response);
  }

  public function getContact() {
    $contact = new Contact($this->db);
    $response = $contact->load(array('id=?',$this->f3->get('PARAMS.id')));
    print $this->json_encode_objs($response);
  }

  public function addContact() {
    $contact = new Contact($this->db);
    $contact->add();
    $response = array(
      'lastID' => $contact->get('_id'),
      'msg' => 'success');
    print json_encode($response);
  }

  public function updateContact() {
    $contact = new Contact($this->db);
    $contact->edit($this->f3->get('PARAMS.id'));// update function here
    $response = array(
      'msg' => 'success');
    print json_encode($response);
  }

  public function deleteContact() {
    $contact = new Contact($this->db);
    $contact->delete($this->f3->get('PARAMS.id'));
    $response = array(
      'id' => $this->f3->get('PARAMS.id'),
      'msg' => 'success');
    print json_encode($response);
  }

  //***************************************************************
  //*  Custom JSON Encoder to handle PDO Objects returned from F3 *
  //***************************************************************

  private function json_encode_objs($item){
        if(!is_array($item) && !is_object($item)){
            return json_encode($item);
        }else{
            $pieces = array();
            foreach($item as $k=>$v){
                $pieces[] = "\"$k\":".$this->json_encode_objs($v);
            }
            return '{'.implode(',',$pieces).'}';
        }
    }

}
