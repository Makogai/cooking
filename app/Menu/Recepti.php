<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Recepti
{
    public function make(Builder $menu)
    {
       $item = $menu->add('Recepti', [
            'active' => 'admin.recipe',
            'permission' => 'backend',
            'icon' => 'square',
            'order' => 100,
        ]);
        $item->add('Sub item 1', [
            'permission' => 'backend',
            'active' => 'admin.recipe',
            'route' => 'admin.recipe',
        ]);
    }
}
