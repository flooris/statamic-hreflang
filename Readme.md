# Add a collection containing alternate page language urls

## Installation

Download or clone the repository, rename the folder to `HrefLang` then copy the folder to your site's `Addons` directory, then refresh the add-ons to install the dependencies.

``` bash
php please addons:refresh
```

## Usage

All you need to do is install the add-on, then use the `href_lang` tag to display alternative urls to your content

### In your head:
``` html
{{ href_lang }}
    <link rel="alternate" hreflang="{{ lang }}" href="{{ url }}" />
{{ /href_lang }}
```

### In a sitemap:
``` html
{{ href_lang }}
    <xhtml:link rel="alternate" hreflang="{{ lang }}" href="{{ url }}" />
{{ /href_lang }}
```