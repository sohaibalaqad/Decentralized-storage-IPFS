<?php

namespace App\Helpers;

function getSizeDisk($ip) {

    $ip = $ip;
    $community = 'public';

    $allocationUnitsOid = '1.3.6.1.2.1.25.2.3.1.4';
    $sizeOid = '1.3.6.1.2.1.25.2.3.1.5';
    $usedOid = '1.3.6.1.2.1.25.2.3.1.6';

    $session = new SNMP(SNMP::VERSION_2C, $ip, $community);
    $session->oid_output_format = SNMP_OID_OUTPUT_NUMERIC;
    $session->quick_print = true;

    $allocationUnits = array_sum($session->walk($allocationUnitsOid));
    $size = array_sum($session->walk($sizeOid));
    $used = array_sum($session->walk($usedOid));

    $diskSize = $allocationUnits * $size;
    $freeSpace = ($allocationUnits * $size) - ($allocationUnits * $used);

    $session->close();
    return [
        'diskSize' => number_format($diskSize / 1024 /1024 / 1024, 2, '.', ''),
        'freeSpace' => number_format($freeSpace / 1024 /1024 / 1024, 2, '.', ''),
    ];
}
