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

    $url = 'https://pangea.stanford.edu'.$_SERVER['REQUEST_URI'];
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Redirecting to: '.$url),
    );
    $response = new TrustedRedirectResponse($url);
    $xyz = print_r($this,true);
    \Drupal::logger('stanford_earth2pangea')->notice('buh?: <pre>'.$xyz.'</pre>');
    //return $build;
    $response->send();
    return $response;
  }
}
