# plugin-seo
Сео для ALTE3

###USING
В хедере указываем тайтл и мета
```html
	<title>{{ !empty($seo) ? $seo->seo_title : 'Agro Olimp' }}</title>
	<meta name="title" content="{{  !empty($seo) ? $seo->seo_meta_title : '' }}">
	<meta name="description" content="{{  !empty($seo) ? $seo->seo_meta_desc : '' }}">
```
