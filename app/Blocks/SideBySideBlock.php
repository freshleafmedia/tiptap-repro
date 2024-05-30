<?php

namespace App\Blocks;

use Filament\Forms\Components\Group;
use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;

class SideBySideBlock extends TiptapBlock
{
    public string $width = 'full';
    public function getFormSchema(): array
    {
        return [
            Group::make()
                ->columns(2)
                ->schema([
                    TiptapEditor::make('left')
                        ->blocks([
                            ChildBlock::class,
                        ]),
                    TiptapEditor::make('right')
                        ->blocks([
                            ChildBlock::class,
                        ]),
                ]),
        ];
    }
}
