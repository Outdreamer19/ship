<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum PackageStatus: string implements HasLabel
{
    case PRE_ALERT = 'Pre-Alert';
    case WAREHOUSE = 'Received at Warehouse';
    case PICKUP = 'Waiting for Pickup';
    case DELIVERED = 'Package Delivered';
    case PRIVATE = 'Package cancelled';
    case CANCELLED = 'Cancelled';

    public function getLabel(): ?string
    {
        return $this->name;
    }
}

// enum PackageStatus1: string implements HasLabel
// {
//     case Draft = 'draft';
//     case Reviewing = 'reviewing';
//     case Published = 'published';
//     case Rejected = 'rejected';
    
//     public function getLabel(): ?string
//     {
//         return $this->name;
        
//         // or
    
//         // return match ($this) {
//         //     self::Draft => 'Draft',
//         //     self::Reviewing => 'Reviewing',
//         //     self::Published => 'Published',
//         //     self::Rejected => 'Rejected',
//         // };
//     }
// }


// enum PackageStatus: string implements HasLabel
// {
//     const PRE_ALERT = 'Pre-Alert';
//     const WAREHOUSE = 'Received at Warehouse';
//     const PICKUP = 'Waiting for Pickup';
//     const DELIVERED = 'Package Delivered';
//     const PRIVATE = 'Private';
//     const CANCELLED = 'Package Cancelled';
// }
