<?php


/**
 * Usuários
 */
Breadcrumbs::register('admin.users', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Usuários', route('admin.users'));
});

/**
 * Roles
 */
Breadcrumbs::register('admin.roles', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Perfis de Acesso', route('admin.roles'));
});

/**
 * Permissions
 */
Breadcrumbs::register('admin.permissions', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home');
    $breadcrumbs->push('Permissões', route('admin.permissions'));
});