<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $head;
    /**
 * Create the component instance.
 *
 * @param  string  $head
 * @return void
 */
public function __construct($head=null)
{
    $this->head = $head;
}

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
