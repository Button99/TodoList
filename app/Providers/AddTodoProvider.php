<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class AddTodoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('description', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('date', 'components.form.date', ['name', 'value' => null, 'attributes' => []]);
        Form::component('submit', 'components.form.submit', ['name', '']);
    }
}
