<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum PickupLocation: string implements HasLabel
{
    case MONTEGO_BAY_SQUARE = 'Montego Bay Square';
    case FALMOUTH_SQUARE = 'Falmouth Square';
    case ON_THE_MAIN = 'On the main';

    public function getLabel(): ?string
    {
        return $this->name;
    }
}