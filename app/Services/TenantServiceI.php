<?php

namespace App\Services;

use App\Models\Tenant;

interface TenantServiceI
{
    public function createTenant(Tenant $tenant);

    public function updateTenant(Tenant $tenant);

    public function deleteTenant(Tenant $tenant);

    public function getTenantById(int $id): Tenant;
}
