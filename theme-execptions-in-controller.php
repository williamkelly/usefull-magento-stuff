<?php
class KurtGeiger_Content_Ss15Controller extends Mage_Core_Controller_Front_Action
{

    public function shoeGuideAction()
    {
        $enabledThemes = array('default','mobile','eu','eu-mobile','de','de-mobile','es','es-mobile','fr','fr-mobile','ie','ie-mobile','nl','nl-mobile');
        if( ! in_array(Mage::getSingleton('core/design_package')->getTheme('template'), $enabledThemes)) {
            $this->norouteAction();
            return;
        }

        $this->loadLayout();
        $this->renderLayout();
    }
}
