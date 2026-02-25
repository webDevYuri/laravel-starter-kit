<?php

// ---------------------------------------------------------------------------
// Base Controller — Abstract controller with shared functionality
// ---------------------------------------------------------------------------
// All controllers extend this class. The ApiResponse trait provides
// consistent success() and error() response methods.
//
// You can add shared authorization logic, pagination helpers,
// or base CRUD methods here later.
// ---------------------------------------------------------------------------

namespace App\Http\Controllers;

use App\Traits\ApiResponse;

abstract class Controller
{
    use ApiResponse;
}
