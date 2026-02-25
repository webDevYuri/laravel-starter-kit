<?php

// ---------------------------------------------------------------------------
// Sample DTO — Data Transfer Object
// ---------------------------------------------------------------------------
// DTOs carry data between layers without exposing internal models.
// Use PHP 8.2 readonly classes for immutability and clarity.
//
// You can add factory methods (fromRequest, fromModel), validation,
// or serialization logic here later.
// ---------------------------------------------------------------------------
//
// Usage:
//   $dto = new CreateUserDTO(name: 'John', email: 'john@example.com');
//
// Rename this file to match your domain: CreateUserDTO.php, UpdateOrderDTO.php, etc.
// Delete this file once you have your own DTOs.
// ---------------------------------------------------------------------------

namespace App\DTOs;

readonly class SampleDTO
{
    public function __construct(
        // public string $name,
        // public string $email,
    ) {}
}
