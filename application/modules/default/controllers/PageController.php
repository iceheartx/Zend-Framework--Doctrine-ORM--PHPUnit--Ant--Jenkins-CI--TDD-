<?php
/**
 * Default Controller
 *
 * @author          Eddie Jaoude
 * @package       Default Module
 *
 */
class PageController extends BaseController
{

    /**
     * Initialisation method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function init()
    {
        parent::init();
    }

    /**
     * post dispatch method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function  postDispatch()
    {
        parent::postDispatch();
    }

    /**
     * default method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function indexAction() {
        
    }
    
    public function viewAction()
    {
    	Zend_Debug::dump($this->getRequest()->getParams()); die();
    }
    


}

