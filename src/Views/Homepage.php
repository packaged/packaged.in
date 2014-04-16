<?php
namespace Packaged\Website\Views;

use Cubex\View\TemplatedViewModel;
use Packaged\Dispatch\AssetManager;

class Homepage extends TemplatedViewModel
{
  public function __construct()
  {
    id(AssetManager::assetType())->requireCss('css/homepage');
  }
}
