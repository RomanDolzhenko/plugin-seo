# plugin-seo
Сео для ALTE3

### USING

В хедере указываем тайтл и мета
```html
	<title>{{ !empty($seo) ? $seo->seo_title : '' }}</title>
	<meta name="title" content="{{  !empty($seo) ? $seo->seo_meta_title : '' }}">
	<meta name="description" content="{{  !empty($seo) ? $seo->seo_meta_desc : '' }}">
```

### ROUTE
```php
    //Seo
    Route::group([ 'prefix' => 'seo', 'as' => 'seo.'], function () {

        Route::post('set', [
            'as' => 'set',
            'uses' => 'SeoController@set',
        ]);

    });
```	

### Вызов на фронт
```php
    Seo::getSeoByObject($eloquent);//Передаем сущьность что бы получить ее СЕО
```	
