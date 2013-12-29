<?php namespace Humweb\Breadcrumbs;

use Illuminate\Support\Collection;

class Breadcrumb extends Collection
{
    /**
     * Add crumb to collection
     * @param string $label label for link
     * @param string $url
     */
    public function add($label, $url = '')
    {
        $key = \Str::slug($label);
        $this->put($key, ['label' => $label, 'url' => $url]);

        return $this;
    }

    /**
     * Clear all breadcrumbs
     * @return this
     */
    public function clear()
    {
        $this->items = array();

        return $this;
    }

    public function toHtml()
    {
        return $this->render();
    }

    public function render($presenter = null)
    {
        $presenter = strtolower($presenter);

        if (strtolower($presenter) === 'foundation')
        {
            $presenter = new FoundationPresenter($this);
        }
        else {
            $presenter = new Presenter($this);
        }
        return $presenter->render();
    }
}   