<<<<<<< HEAD
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace NikoletaPoibrenska\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

  
    public function changeAction() {
        $viewModel = new ViewModel();
        // $viewModel->setTemplate('layout/custom');
    // $this->layout('layout/student'); // change the layout. DOn't forget to add it in modeule.config.php
        // $this->layout('layout/NikoletaPoibrenska');
    $this->layout('layout/eponymous');
        return $viewModel;
    }

}
=======
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace NikoletaPoibrenska\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

  
    public function changeAction() {
        $viewModel = new ViewModel();
        // $viewModel->setTemplate('layout/custom');
    // $this->layout('layout/student'); // change the layout. DOn't forget to add it in modeule.config.php
        // $this->layout('layout/NikoletaPoibrenska');
    $this->layout('layout/eponymous');
        return $viewModel;
    }

}
>>>>>>> refs/heads/master
