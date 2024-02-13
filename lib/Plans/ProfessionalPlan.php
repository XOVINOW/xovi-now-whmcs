<?php

// Copyright 2024. WebPros International GmbH. All rights reserved.

namespace WHMCS\Module\Server\XoviNow\Plans;

use WHMCS\Module\Server\XoviNow\Plan;

final class ProfessionalPlan implements Plan
{
    public function getId(): string
    {
        return 'professional';
    }

    public function getName(): string
    {
        return 'XOVI NOW Professional';
    }

    public function getPlanApiConst(): string
    {
        return 'XO-NOW-PP-PRO-1M';
    }
}
