<?php
/**
 * Controller Class Api
 * 
 * @category    Controller
 * @package     Repeat-rep
 * @author      Mbulaheni T <mbulahenitg@gmail.com>
 * @license     openSource 
 * @link        https://revtech.co.za
 */

/**
 * Exception which causes HTTP ERROR 404 (Not Found).
 */
class NotFoundException extends Exception {
}

/**
 * Application controller & main access point
 */
final class Index{

  const DEFAULT_PAGE = 'homepage';
  const PAGE_DIR = '/web/';
  const LAYOUT_PAGE='index.phtml';
  const LAYOUT_DIR = '/layout/';

  private static $CLASS = [
    'Db' => '/model/db.php', 
    'Types' => '/model/user.php', 
    'Products' => '/model/user.php',
    'NotFoundException'=> 'index.php',
    'Subscriber'=>'/model/user.php',
    'Cart'=>'/model/user.php',
    'CartItem'=>'/model/user.php',
    'Contact' => '/model/user.php',
    'Billing' => '/model/user.php'
  ];

    /**
     * System config.
     */
    function __construct() {
      // error reporting - all errors for development (ensure you have display_errors = On in your php.ini file)
      error_reporting(E_ALL | E_STRICT);
      mb_internal_encoding('UTF-8');
      set_exception_handler([$this, 'handleException']);
      spl_autoload_register([$this, 'loadClass']);
      session_start();
    }

  /**
     * Class loader.
     */
  public function loadClass($name) {

    if (!array_key_exists($name, self::$CLASS)) {
      throw new NotFoundException('Class "' . $name . '" not found.');
    }

    require_once __DIR__.self::$CLASS[$name];
  }

  /**
    * Exception handler.
    */
  public function handleException($ex) {
    $extra = ['message' => $ex->getMessage()];
    if ($ex instanceof NotFoundException) {
         header('HTTP/1.0 404 Not Found');
        $this->runPage('404', $extra);
    } else {
        // TODO log exception
         header('HTTP/1.1 500 Internal Server Error');
         $this->runPage('500', $extra);
    }
  }

  /**
   * 
   */
  private function runPage($page, array $extra = []) {
      
      $run = false;
      if ($this->hasScript($page)) {
          $run = true;
          require $this->getScript($page);
      }
      if ($this->hasTemplate($page)) {
          $run = true;
          // data for main template
          $template = $this->getTemplate($page);
        
          // main template (layout)
          require __DIR__.self::LAYOUT_DIR.self::LAYOUT_PAGE;
      }
      if (!$run) {
        throw new NotFoundException('Page "' . $page . '" has neither script nor template!');
      }
  }

  /**
   * 
   */
  private function getPage() {
    $page = self::DEFAULT_PAGE;
    if (array_key_exists('page', $_GET)) {
      $page = $_GET['page'];
    }
    return $this->checkPage($page);
  }

  /**
   * 
   */
  private function checkPage($page) {
      if (!preg_match('/^[a-z0-9-]+$/i', $page)) {
        // TODO log attempt, redirect attacker, ...
        throw new NotFoundException('Unsafe page "' . $page . '" requested');
      }
      if (!$this->hasScript($page)
            && !$this->hasTemplate($page)) {
        // TODO log attempt, redirect attacker, ...
        throw new NotFoundException('Page "' . $page . '" not found');
      }
      return $page;
  }

  /**
   * 
   */
  private function hasScript($page) {
      return file_exists($this->getScript($page));
  }

  
  /**
   * 
   */
  private function getScript($page) {
    return __DIR__.self::PAGE_DIR.$page.'.php';
  }

  /**
   * 
   */
  private function hasTemplate($page) {
      return file_exists($this->getTemplate($page));
  } 
  
  /**
   * 
   */
  private function getTemplate($page) {
      return __DIR__.self::PAGE_DIR.$page.'.phtml';
  }

  /**
    * Run the application!
    */
  public function run() {
      $this->runPage($this->getPage());
  }
}

$index = new Index();
$index->run();