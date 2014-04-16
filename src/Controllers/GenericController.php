<?php
namespace Packaged\Website\Controllers;

use Cubex\View\LayoutController;
use Packaged\Website\Views\Homepage;

class GenericController extends LayoutController
{
  public function defaultAction()
  {
    return new Homepage();
  }
}
