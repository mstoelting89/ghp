<?php
namespace Me\Teme\Controller;


/***
 *
 * This file is part of the "TestExtention" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 
 *
 ***/
/**
 * TextExController
 */
class TextExController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * textExRepository
     * 
     * @var \Me\Teme\Domain\Repository\TextExRepository
     */
    protected $textExRepository = null;

    /**
     * @param \Me\Teme\Domain\Repository\TextExRepository $textExRepository
     */
    public function injectTextExRepository(\Me\Teme\Domain\Repository\TextExRepository $textExRepository)
    {
        $this->textExRepository = $textExRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $textices = $this->textExRepository->findAll();
        $this->view->assign('textices', $textices);
    }

    /**
     * action show
     * 
     * @param \Me\Teme\Domain\Model\TextEx $textEx
     * @return void
     */
    public function showAction(\Me\Teme\Domain\Model\TextEx $textEx)
    {
        $this->view->assign('textEx', $textEx);
    }
}
