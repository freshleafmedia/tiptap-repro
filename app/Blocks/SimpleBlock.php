<?php

namespace App\Blocks;

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

    public function getPreview(?array $data = []): string
    {
        return var_export($data, true);
    }
}
