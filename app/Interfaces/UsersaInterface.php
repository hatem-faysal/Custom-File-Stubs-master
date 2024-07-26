<?php

namespace {{ namespace }};

use Illuminate\View\Component;

class {{ class }} extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function rendersoo()
    {
        return {{ view }};
    }
}
