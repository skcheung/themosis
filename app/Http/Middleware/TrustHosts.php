<?php

namespace App\Http\Middleware;

class TrustHosts extends \Illuminate\Http\Middleware\TrustHosts
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}