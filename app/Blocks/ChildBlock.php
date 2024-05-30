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
}
