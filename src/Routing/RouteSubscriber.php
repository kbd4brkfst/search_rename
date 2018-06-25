<?php

namespace Drupal\search_rename\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    $route = $collection->get('search.view_node_search')
    if ($route) {
      $route->setDefault('_controller', '\Drupal\search_rename\Controller\SearchController::view');
      $route->setPath('zoeken');
    }
  }
}