<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Thing extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.thing';
}
