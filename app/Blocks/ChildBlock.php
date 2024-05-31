<?php

namespace App\Blocks;

use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;

class ChildBlock extends TiptapBlock
{
    public function getFormSchema(): array
    {
        return [
            TiptapEditor::make('body')
                ->blocks([])
                ->required(),
        ];
    }

    public function getPreview(?array $data = [], ?\Filament\Forms\Components\Component $component = null): string
    {
        return var_export($component->getStatePath(), true) . PHP_EOL . var_export($data, true);
    }
}
