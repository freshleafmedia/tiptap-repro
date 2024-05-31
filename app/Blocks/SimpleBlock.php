<?php

namespace App\Blocks;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;

class SimpleBlock extends TiptapBlock
{
    public function getFormSchema(): array
    {
        return [
            TextInput::make('text'),
        ];
    }

    public function getPreview(?array $data = null, ?Component $component = null): string
    {
        return var_export($data, true);
    }
}
