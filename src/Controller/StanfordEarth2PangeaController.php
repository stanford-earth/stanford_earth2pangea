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
    $response = new TrustedRedirectResponse($url,301);
    $response->send();
    return $response;
  }
}
