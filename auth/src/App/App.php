<?php

namespace RohitAuth\App;

class App {

  const CSS_DEFAULT = 1, JS_LIBRARY = 1;

  public  $header, $footer, $body, $styles = [], $scripts = [];
  static  $data = [], $default = [];

  public static function addStyles($data, $options = NULL) {
    $this->styles = self::appStaticVariables(__CLASS__ . __METHOD__);
    if (isset($data)) {
      $default_options += array(
        'type' => 'file',
        'group' => self::CSS_DEFAULT,
        'weight' => 0,
        'every_page' => FALSE,
        'media' => 'all',
        'preprocess' => TRUE,
        'data' => $data,
        'browsers' => array(),
      );
      $options = array_merge($default_options, $options);
      $this->styles[$data] = $options;
     }
    return $this->styles;
  }

  public function getStyles($css) {
    if (!isset($css)) {
      $css = $this->styles;
    }
    return $css;
  }

  public static function addScripts($data, $options = NULL) {
    $this->scripts = self::appStaticVariables(__CLASS__ . __METHOD__);
    if (isset($data)) {
      $default_options += array(
        'data' => $data,
        'type' => 'file',
        'scope' => 'header',
        'group' => self::JS_LIBRARY,
        'every_page' => TRUE,
        'weight' => -1,
        'requires_jquery' => TRUE,
        'preprocess' => TRUE,
        'cache' => TRUE,
        'defer' => FALSE,
      );
      $options = array_merge($default_options, $options);
      $this->scripts[$data] = $options;
     }
    return $this->scripts;
  }

  public function getScripts($script) {
    if (!isset($script)) {
      $script = $this->script;
    }
    return $script;
  }

  public static function appStaticVariables($name, $default_value = NULL) {
    if (isset($this->data[$name]) || array_key_exists($name, $this->data)) {
       return $data[$name];
    }

    if (isset($name)) {
      $this->default[$name] = $this->data[$name] = $default_value;
      return $data[$name];
    }

    foreach ($default as $name => $value) {
      $data[$name] = $value;
    }

    return $data;
  }
}
