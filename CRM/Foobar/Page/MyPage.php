<?php
use CRM_Foobar_ExtensionUtil as E;

class CRM_Foobar_Page_MyPage extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::resetBreadCrumb();
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('MyPage'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    parent::run();
  }

}
