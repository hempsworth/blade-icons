<?php

declare(strict_types=1);

namespace BladeUI\Icons\Components;

use Closure;
use Illuminate\View\Component;

final class Icon extends Component
{
    public function __construct(public string $name) {}

    public function render(): Closure
    {
        return function (array $data) {
            $attributes = $data['attributes']->getIterator()->getArrayCopy();

            $class = $attributes['class'] ?? '';

            unset($attributes['class']);

            return svg($this->name, $class, $attributes)->toHtml();
        };
    }
}
