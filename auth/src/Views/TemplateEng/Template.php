<?php

namespace RohitAuth\Views\TemplateEng;

use Exception;
use RohitAuth\Container\App;

class Template {
  protected $file, $tempate_loc;
  private $vars = [];

  public function __construct($file) {
    $this->file = $file;
    $this->tempate_loc = App::$template_folder;
  }

  public function __set($key, $value) {
    $this->vars[$key] = $value;
  }

  public function __get($name) {
    return $this->vars[$name];
  }

  public function render() {
    $file = $this->tempate_loc . $this->file . ".php";
    if (!file_exists($file)) {
      throw new Exception("Error loading template file ($file)");
    }
    extract($this->vars);
    ob_start();
    include($file);
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
