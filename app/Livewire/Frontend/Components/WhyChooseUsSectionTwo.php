<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class WhyChooseUsSectionTwo extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public string $shortDetails;
    public array $items;
    public string $img;
    public bool $isDisplaySection = true;
    public string $imgFeatured;
    public string $imgThumb;
    public string $imgFrame;
    public array $list = [];


    /**
     * Create a new component instance.
     *
     * @param string $item array of values     
     * @return void
     */
    public function mount(array $item = []): void
    {
        if (!isset($item['choose2']) || empty($item['choose2'])) {
            $this->isDisplaySection =  false;
        } else {
            $model = $item['choose2'];
        }
        // dump($model );
        $this->title = isset($model['title']) ? __($model['title']) : '';
        $this->subTitle = isset($model['subTitle']) ? __($model['subTitle']) : '';
        $this->shortDetails = isset($model['shortDetails']) ? __($model['shortDetails']) : '';
        $this->items = isset($model['items']) ? $model['items'] : [];
        $this->imgFeatured = isset($model['imgFeatured']) ? $model['imgFeatured'] : '';
        $this->imgThumb = isset($model['imgThumb']) ? $model['imgThumb'] : '';
        $this->imgFrame = isset($model['imgFrame']) ? $model['imgFrame'] : '';
        $this->list = isset($model['list']) ? $model['list'] : [];
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.components.why-choose-us-section-two');
    }
}
