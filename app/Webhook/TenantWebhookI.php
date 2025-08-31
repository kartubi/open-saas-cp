<?php

namespace App\Webhook;

interface TenantWebhookI
{
    public function updateTenant($data): void;
}
