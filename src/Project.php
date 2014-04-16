<?php
namespace Packaged\Website;

use Cubex\Kernel\ProjectKernel;
use Packaged\Dispatch\AssetManager;
use Packaged\Website\Controllers\GenericController;

/**
 * This project is the default entry point for you application, as specified
 * by conf/defaults.ini [kernel]default=
 */
class Project extends ProjectKernel
{
  public function init()
  {
    id(AssetManager::assetType())->requireCss('css/base');
  }

  public function defaultAction()
  {
    return new GenericController();
  }
}
