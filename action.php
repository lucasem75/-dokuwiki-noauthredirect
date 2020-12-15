<?php
/**
 * Dokuwiki Action Plugin "Not Authenticated Redirect"
 * 
 * Redirect to an url when user is not authenticated
 * 
 * @author   Emmanuel Lucas <lucasem75@gmail.com>
 */

if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once(DOKU_PLUGIN.'action.php');

class action_plugin_noauthredirect extends DokuWiki_Action_Plugin {

  /**
   * Register its handlers with the dokuwiki's event controller
   */
  function register(Doku_Event_Handler $controller) {
    # TPL_CONTENT_DISPLAY is called before and after content of wikipage
    # is written to output buffer
    $controller->register_hook(
      'ACTION_ACT_PREPROCESS', 'BEFORE', $this, 'redirect_on_no_auth'
    );
  }

  /**
   * Handle the event
   */ 
  function redirect_on_no_auth(&$event, $param) {
    global $ACT;
    global $ID;
    global $conf;

    // Redirect when user is not authentified
    if (auth_quickaclcheck($ID) == AUTH_NONE)
    {
		$rurl=$this->getConf('url');
		header('Location: ' . $rurl);
    }
  }

}

