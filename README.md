# yii2-bootstrap-material
Composer package for implementing FezVrasta's bootstrap material design in Yii2
https://github.com/FezVrasta/bootstrap-material-design

## Installation

Either run
```
composer global require "romdim/yii2-bootstrap-material:dev-master"
```

Or add

```
"romdim/yii2-bootstrap-material": "dev-master",
```

to the require section of your composer.json file.

There is now another branch called material-0-2-2 which uses the FezVrasta's bootstrap material design Version 0.2.2 which seems better to me right now.
You can use this branch by changing dev-master to dev-material-0-2-2 at the above code. 

## Usage

After installation, just add

```
    public $depends = [
        'yii\web\YiiAsset',
		'romdim\bootstrap\material\BootMaterialCssAsset'
		'romdim\bootstrap\material\BootMaterialJsAsset'
    ];
```

in your AppAsset

If you want to use the minified versions then, you can add:

```
$config = [
    ...
    'components' => [
        ...
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'appendTimestamp' => true,
            'bundles' => [
                ...
                'romdim\bootstrap\material\BootMaterialCssAsset' => [
                    'css' => [
                        YII_ENV_DEV ? 'css/ripples.css' : 'css/ripples.min.css',
                        YII_ENV_DEV ? 'css/material-fullpalette.css' : 'css/material-fullpalette.min.css',
                    ]
                ],
                'romdim\bootstrap\material\BootMaterialJsAsset' => [
                    'js' => [
                        YII_ENV_DEV ? 'js/ripples.js' : 'js/ripples.min.js',
                        YII_ENV_DEV ? 'js/material.js' : 'js/material.min.js',
                    ]
                ]
                ...
            ]
        ]
        ...
    ]
    ...
]
```