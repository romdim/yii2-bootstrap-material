<?php

namespace romdim\bootstrap\material;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Bootstrap Material css and js files.
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class BootMaterialCssAsset extends AssetBundle
{
	public $sourcePath = '@bower/bootstrap-material-design/dist';

	public $css=['css/ripples.min.css'];

	public $depends	 = [
		'yii\bootstrap\BootstrapAsset',
	];
	public function __construct()
	{
		if(file_exists(__DIR__.'/../../bower/bootstrap-material-design/dist/css/material.css'))
		{
			$this->css[]='css/material.css';
		}
		else
		{
			$this->css[]='css/bootstrap-material-design.css';
		}
	}
}
