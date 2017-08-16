<?php

namespace Statamic\Addons\HrefLang;

use Statamic\API\Content;
use Statamic\Extend\Tags;

class HrefLangTags extends Tags
{
    /**
     * The {{ href_lang }} tag
     *
     * @return string|array
     */
    public function index()
    {
        if (empty($this->context['id'])) {
            return '';
        }
        $page = $this->context['id'];

        /** @var \Statamic\Data\Content\Content $data */
        $data = Content::find($page);

        $locales = $data->locales();

        $alternates = [];

        foreach($locales as $locale) {
            $data->locale($locale);
            $localized_uri = $data->absoluteUrl();

            $alternates[] = [
                'lang' => $locale,
                'url' => $localized_uri,
            ];

        }

        return $this->parseLoop($alternates);
    }
}
