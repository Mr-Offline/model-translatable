<?php

namespace ArsalanAhadian\ModelTranslatable\Traits;

use ArsalanAhadian\ModelTranslatable\Models\Translation;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasTranslations
{
    protected array $loadedTranslations = [];

    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    public function getTranslated(string $key, ?string $locale = null): string|array|null
    {
        $locale = $locale ?? app()->getLocale();
        $cacheKey = $locale . '.' . $key;

        if (! array_key_exists($cacheKey, $this->loadedTranslations)) {
            $value = $this->translations()
                ->where('field', $key)
                ->where('locale', $locale)
                ->value('value');

            $this->loadedTranslations[$cacheKey] = json_validate($value) ? json_decode($value, true) : $value;
        }

        return $this->loadedTranslations[$cacheKey];
    }

    public function setTranslated(string $key, string|array $value, ?string $locale = null): void
    {
        if (! $this->exists) {
            throw new \RuntimeException("Cannot set translation before the model is saved.");
        }

        $locale = $locale ?? app()->getLocale();

        $this->translations()->updateOrCreate(
            ['field' => $key, 'locale' => $locale],
            ['value' => is_array($value) ? json_encode($value) : $value]
        );

        // Clear cache for this field
        unset($this->loadedTranslations[$locale . '.' . $key]);
    }

    public function setTranslations(array $translations, ?string $locale = null): void
    {
        foreach ($translations as $field => $value) {
            $this->setTranslated($field, $value, $locale);
        }
    }
}

