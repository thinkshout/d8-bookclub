<?php
/**
 * @file
 * Contains \Drupal\heypaxton\Controller\HeypaxtonController
 */

namespace Drupal\heypaxton\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HeypaxtonController extends ControllerBase {
  public function yo(Request $request)
  {
    $response = new Response('Yo, '.$request->get('person').'!', Response::HTTP_OK);
    return $response;
  }
}
