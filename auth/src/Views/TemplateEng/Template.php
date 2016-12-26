<?php

namespace RohitAuth\Views\TemplateEng;


class Template {
  protected $file;
  private $vars = [];

  public function __construct($file) {
    $this->file = $file;
  }

  public function __set($key, $value) {
    $this->vars[$key] = $value;
  }

  public function __get($name) {
    return $this->vars[$name];
  }

  public function render() {
    if (!file_exists($this->file)) {
      throw new Exception("Error loading template file ($this->file).");
    }
    extract($this->vars);
    ob_start();
    include($this->file ".php");
    return ob_get_clean();
  }

  public static function merge($templates, $separator = "\n") {
    $output = "";
    foreach ($templates as  $template) {
      $content = (get_class($template) !== "Template") ? "Error, incorrect type - expected Template." : $template->render();
      $output .= $content . $separator;
    }
    return $output;
  }


}
