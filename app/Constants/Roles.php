<?php

// ---------------------------------------------------------------------------
// Roles — User roles and permissions
// ---------------------------------------------------------------------------
// Centralized role definitions and permission mappings.
// Use these with middleware and authorization gates.
//
// You can add dynamic permission loading, role hierarchy,
// or Spatie Laravel Permission integration here later.
// ---------------------------------------------------------------------------

namespace App\Constants;

final class Roles
{
    public const SUPER_ADMIN = 'super_admin';
    public const ADMIN = 'admin';
    public const USER = 'user';

    /**
     * Get all available roles.
     *
     * @return string[]
     */
    public static function all(): array
    {
        return [
            self::SUPER_ADMIN,
            self::ADMIN,
            self::USER,
        ];
    }

    // ── Permissions ──────────────────────────────────────────────────────
    public const MANAGE_USERS = 'manage_users';
    public const MANAGE_ROLES = 'manage_roles';
    public const VIEW_DASHBOARD = 'view_dashboard';
    public const MANAGE_SETTINGS = 'manage_settings';

    /**
     * Get permissions mapped to each role.
     *
     * @return array<string, string[]>
     */
    public static function permissions(): array
    {
        return [
            self::SUPER_ADMIN => [
                self::MANAGE_USERS,
                self::MANAGE_ROLES,
                self::VIEW_DASHBOARD,
                self::MANAGE_SETTINGS,
            ],
            self::ADMIN => [
                self::MANAGE_USERS,
                self::VIEW_DASHBOARD,
            ],
            self::USER => [
                self::VIEW_DASHBOARD,
            ],
        ];
    }
}
