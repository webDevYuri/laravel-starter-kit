<?php

// ---------------------------------------------------------------------------
// Sample API Resource — Response transformation
// ---------------------------------------------------------------------------
// API Resources transform Eloquent models into JSON responses.
// This keeps your API response structure consistent and decoupled from models.
//
// You can add conditional attributes, relationships, pagination meta,
// or resource collections here later.
// ---------------------------------------------------------------------------
//
// Usage:
//   return new UserResource($user);
//   return UserResource::collection($users);
//
// Rename this file to match your domain: UserResource.php, OrderResource.php, etc.
// Delete this file once you have your own resources.
// ---------------------------------------------------------------------------

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SampleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
