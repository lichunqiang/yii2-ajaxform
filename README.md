yii2-ajaxform
---------
[![Build Status](https://img.shields.io/travis/lichunqiang/yii2-ajaxform.svg?style=flat-square)](http://travis-ci.org/lichunqiang/yii2-ajaxform)
[![version](https://img.shields.io/packagist/v/light/yii2-ajaxform.svg?style=flat-square)](https://packagist.org/packages/light/yii2-ajaxform)
[![Download](https://img.shields.io/packagist/dt/light/yii2-ajaxform.svg?style=flat-square)](https://packagist.org/packages/light/yii2-ajaxform)
[![Issues](https://img.shields.io/github/issues/lichunqiang/yii2-ajaxform.svg?style=flat-square)](https://github.com/lichunqiang/yii2-ajaxform/issues)


## Overview

Using `jquery.form` to make `ActiveForm` has ability to submit via ajax but not fullpage reload.

## Install

Using composer:

```
$ composer require light/yii2-ajaxform=*
```

## Usage

```php
use light\widgets\ActiveForm;
use yii\web\JsExpression;

ActiveForm::begin([
	'ajaxSubmitOptions' => [
		'success' => new JsExpression('function(response) {console.log(response)}'),
		'complete' => new JsExpression('function() {console.log("request completed.")}')
	]
])

```

### Options

* Default enabled `enableAjaxSubmit` is true
* `ajaxSubmitOptions` you can find in [jquery.form](https://github.com/malsup/form)


## Test

```
$ phpunit
```
## LICENSE

![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/lichunqiang/yii2-ajaxform/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

