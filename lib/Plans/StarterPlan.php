<?php

// Copyright 2024. WebPros International GmbH. All rights reserved.

namespace WHMCS\Module\Server\XoviNow\Plans;

use WHMCS\Module\Server\XoviNow\Plan;

final class StarterPlan implements Plan
{
    public function getId(): string
    {
        return 'starter';
    }

    public function getName(): string
    {
        return 'XOVI NOW Starter';
    }

    public function getPlanApiConst(): string
    {
        return 'XO-NOW-PP-STA-1M';
    }
}
