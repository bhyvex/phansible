<?php

namespace Phansible\Roles;

use Phansible\RoleInterface;

class Redis implements RoleInterface
{
    public function getName()
    {
        return 'Redis';
    }

    public function getSlug()
    {
        return 'redis';
    }

    public function getRole()
    {
        return 'redis';
    }

    public function requiresRoles()
    {
        return [];
    }

    public function getInitialValues()
    {
        return [
            'install' => 0,
            'port'    => 6379,
        ];
    }
}
