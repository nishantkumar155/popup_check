<?php

namespace Drupal\popup_check\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

/**
 * Class MyAlertController.
 *
 * @package Drupal\popup_check\Controller
 */
class MyAlertController extends ControllerBase {


  public function page() {
    $url = Url::fromRoute('popup_check.my_alert');
    $link_options = array(
      'attributes' => array(
        'class' => array(
          'use-ajax',
        ),
        'data-dialog-type' => 'modal',
      ),
    );
    $url->setOptions($link_options);
    $link1 = \Drupal::l(t('Link title'), $url);

    return array(
      '#type' => 'markup',
      '#markup' => $link1,
    );
  }


}
