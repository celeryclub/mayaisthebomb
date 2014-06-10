<?php

use \Pheasant\Types;

class Reason extends \Pheasant\DomainObject {
  public function tableName() {
    return 'reasons';
  }

  public function properties() {
    return array(
      'id'       => new Types\Integer(11, 'primary auto_increment'),
      'number'   => new Types\Integer(11, 'required unique'),
      'body'     => new Types\String(65534),
      'footnote' => new Types\String(255),
      'css'      => new Types\String(65534)
    );
  }
}
