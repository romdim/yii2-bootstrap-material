# yii2-bootstrap-material
Composer package for implementing FezVrasta's bootstrap material design in Yii2

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