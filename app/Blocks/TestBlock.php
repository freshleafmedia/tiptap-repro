<?php

namespace App\Blocks;

use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;

class TestBlock extends TiptapBlock
{
    public function getFormSchema(): array
    {
        return [
            TiptapEditor::make('nested-content')
                ->blocks([
                    TestBlock::class,
                ])
            ->default([]),
        ];
    }
}
