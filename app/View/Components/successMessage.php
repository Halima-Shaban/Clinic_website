<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class successMessage extends Component
{
    /**
     * Create a new component instance.
     */
    public $message = null;

    public function __construct($message = null)
    {
        //
        $this->message = $message ?? session('success');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $message = $this->message;

        return view('components.success-message', compact('message'));
    }
}
