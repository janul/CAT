<?php

require_once('DeviceConfig.php');
require_once('XML.php');

class Device_Lollipop extends Device_XML{
    final public function __construct() {
      $this->supportedEapMethods  =
            [
              EAP::$PEAP_MSCHAP2,
              EAP::$TTLS_PAP,
              EAP::$TTLS_MSCHAP2,
              EAP::$TLS,
       ];
      $this->lang_scope = 'single';
      $this->all_eaps = TRUE;
    }
}

?>
