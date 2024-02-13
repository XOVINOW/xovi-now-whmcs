<?php

// Copyright 2024. WebPros International GmbH. All rights reserved.

namespace WHMCS\Module\Server\XoviNow;

interface Plan
{
    public function getId(): string;

    public function getName(): string;

    public function getPlanApiConst(): string;
}
