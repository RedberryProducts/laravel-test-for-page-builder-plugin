<?php

namespace App\Filament\Admin\Blocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use RedberryProducts\PageBuilderPlugin\Contracts\BaseBlock;

class Header extends BaseBlock
{
    public static function blockSchema($record): array
    {
        return [
            TextInput::make('name'),
            FileUpload::make('logo'),
        ];
    }

    public static function getView(): ?string
    {
        return 'blocks.header';
    }

    // public static function getCategory(): string
    // {
    //     return 'Header';
    // }
}
