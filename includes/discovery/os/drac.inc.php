<?php

if (!$os) {

    if (strstr($sysDescr, "Dell Out-of-band SNMP Agent for Remote Access Controller") || strstr($sysObjectId, "1.3.6.1.4.1.674.10892.5")) {
        $os = "drac";
    }
}

?>
