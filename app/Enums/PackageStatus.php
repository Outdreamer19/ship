<?php

namespace App\Enums;

enum PackageStatus
{
    const PRE_ALERT = 'Pre-Alert';
    const WAREHOUSE = 'Received at Warehouse';
    const PICKUP = 'Waiting for Pickup';
    const DELIVERED = 'Package Delivered';
    const PRIVATE = 'Private';
    const CANCELLED = 'Package Cancelled';
}
