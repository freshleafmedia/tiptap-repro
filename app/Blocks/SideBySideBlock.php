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

    public function getPreview(?array $data = [], ?\Filament\Forms\Components\Component $component = null): string
    {
        return var_export($component->getStatePath(), true) . PHP_EOL . var_export($data, true);
    }
}
