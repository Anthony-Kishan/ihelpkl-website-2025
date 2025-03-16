<?php

namespace App\Livewire\Frontend\Others;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class RequestDemoPage extends Component
{
    ## Component props
    public string $metaTitle = 'request demo';
    public string $module = 'demo';


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.others.request-demo-page');
    }
}
