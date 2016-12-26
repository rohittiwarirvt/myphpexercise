<?php

namespace RohitAuth\Views\TemplateEng;


class Template {

  public $entries = [];

  public $template_file;

  private $_template;

  private function _load_template() {
    $this->template_file;
    if (file_exists($this->$template_file) && is_readable($this->template_file)) {
      $path = $template_file;
    }
  }

  private function _parse_template($extra = NULL) {

  }

  public function generate_markup($extra = []) {
    $this->_load_template();
    return $this->_parse_template($extra);
  }
}
