<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace romdim\bootstrap\material;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Bootstrap Material css and js files.
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class BootMaterialJsAsset extends AssetBundle
{
	public $sourcePath = '@bower/bootstrap-material-design/dist';
	public $js = [
		'js/ripples.js',
		'js/material.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
