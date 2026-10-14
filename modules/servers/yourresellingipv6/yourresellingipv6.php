<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Ipv6\Integration\WhmcsModule;

/** IPv6-Subnetz: MetaData. */
function yourresellingipv6_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · IPv6-Subnetz', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** IPv6-Subnetz: ConfigOptions. */
function yourresellingipv6_ConfigOptions(): array
{
    return WhmcsModule::configOptions('ipv6');
}

/** IPv6-Subnetz: CreateAccount. */
function yourresellingipv6_CreateAccount(array $params): string
{
    return WhmcsModule::run('ipv6', 'create', $params);
}

/** IPv6-Subnetz: TestConnection. */
function yourresellingipv6_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** IPv6-Subnetz: ClientArea. */
function yourresellingipv6_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('ipv6', $params);
}

/** IPv6-Subnetz: AdminCustomButtonArray. */
function yourresellingipv6_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('ipv6');
}

/** IPv6-Subnetz: RefreshStatus. */
function yourresellingipv6_RefreshStatus(array $params): string
{
    return WhmcsModule::run('ipv6', 'refresh', $params);
}

/** IPv6-Subnetz: TerminateAccount. */
function yourresellingipv6_TerminateAccount(array $params): string
{
    return WhmcsModule::run('ipv6', 'termination', $params);
}
