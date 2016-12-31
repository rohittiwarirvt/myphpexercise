<?php

namespace RohitAuth\Container;

use RohitAuth\Views\TemplateEng\Template ;

class App {

  const CSS_DEFAULT = 1, JS_LIBRARY = 1;

  public  $header, $footer, $body ;
  static  $data = [], $template_folder, $styles = [], $scripts = [];

  public function __construct() {
     self::$template_folder = "src/Views/phase1/templates/";
  }
  public static function addStyles($data, $options = []) {
    self::$styles =& self::appStaticVariables(__CLASS__ . __METHOD__, array());
    if (isset($data)) {
      $default_options = array(
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
      self::$styles[$data] = $options;
     }
    return self::$styles;
  }

  public function getStyles($css = NULL) {
    if (!isset($css)) {
      $css = self::$styles;
    }
    return $css;
  }

  public static function addScripts($data, $options = []) {
    self::$scripts =& self::appStaticVariables(__CLASS__ . __METHOD__, array());
    if (isset($data)) {
      $default_options = array(
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
      self::$scripts[$data] = $options;
     }
    return self::$scripts;
  }

  public function getScripts($script = NULL) {
    $scripts = NULL;
    if (!isset($script)) {
      $scripts = self::$scripts;
    }
    return $scripts;
  }

  public static function &appStaticVariables($name, $default_value = NULL) {
    $data = NULL;

    if (isset(self::$data[$name]) || array_key_exists($name, self::$data)) {
        return self::$data[$name];
    }

    if (isset($name)) {
       self::$data[$name] =& $default_value;
       return self::$data[$name];

    } 

    foreach (self::$data as $name => $value) {
        $data[$name] = $value;
      }

    return $data;
  }

  public function   render($variables) {
      // styles
    self::addStyles("vendor/bower_components/bootstrap/dist/css/bootstrap.min.css");
    $styles_tpl = new Template("styles.tpl");
    $styles_tpl->styles = self::getStyles();

    //scripts
    self::addScripts("vendor/bower_components/jquery/dist/jquery.min.js");
    self::addScripts("vendor/bower_components/bootstrap/dist/js/bootstrap.min.js");
    $scripts_tpl = new Template("scripts.tpl");
    $scripts_tpl->scripts = self::getScripts();

    // page
    $page_tpl = new Template("page.tpl");
    $page_tpl->page = $variables['content'];
    // body
    $body_tpl = new Template("body.tpl");
    $body_tpl->body = $page_tpl->render();

    // header
    $header_tpl = new Template("header.tpl");
    //$body_tpl->body = $page_tpl->render();

    // footer
    $footer_tpl = new Template("footer.tpl");
    //$footer_tpl->body = $page_tpl->render();

    //html
    $html_tpl = new Template("html.tpl");
    $html_tpl->styles = $styles_tpl->render();
    $html_tpl->scripts = $scripts_tpl->render();
    $html_tpl->title = $variables['title'];
    $html_tpl->header = $header_tpl->render();
    $html_tpl->content = $body_tpl->render();
    $html_tpl->footer = $footer_tpl->render();
    return $html_tpl->render();
  }
}
