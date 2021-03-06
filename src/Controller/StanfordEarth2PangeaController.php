<?php

namespace Drupal\stanford_earth2pangea\Controller;

use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Controller\ControllerBase;

/**
 * Redirect from earth to pangea controller.
 */
class StanfordEarth2PangeaController extends ControllerBase {
  
  /**
   * {@inheritdoc}
   */
  public function content() {

    $url = 'https://pangea.stanford.edu'.htmlspecialchars($_SERVER['REQUEST_URI']);
    \Drupal::logger('stanford_earth2pangea')->notice('Redirect to: '.$url);
    $response = new TrustedRedirectResponse($url);
    \Drupal::service('page_cache_kill_switch')->trigger();
    $response->send();
    return $response;
  }
}
