<?php
namespace Michael\PiGhp\Controller;


/***
 *
 * This file is part of the "ghp_plugin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021
 *
 ***/
/**
 * GuitarHeartsProjectController
 */
class GuitarHeartsProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * guitarHeartsProjectRepository
     *
     * @var \Michael\PiGhp\Domain\Repository\GuitarHeartsProjectRepository
     */
    protected $guitarHeartsProjectRepository = null;

    /**
     * @param \Michael\PiGhp\Domain\Repository\GuitarHeartsProjectRepository $guitarHeartsProjectRepository
     */
    public function injectGuitarHeartsProjectRepository(\Michael\PiGhp\Domain\Repository\GuitarHeartsProjectRepository $guitarHeartsProjectRepository)
    {
        $this->guitarHeartsProjectRepository = $guitarHeartsProjectRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $bar = "Hello World";
        $guitarHeartsProjects = $this->guitarHeartsProjectRepository->findAll();
        $this->view->assign('guitarHeartsProjects', $guitarHeartsProjects);
        $this->view->assign('foo', $bar);
    }

    /**
     * action show
     *
     * @param \Michael\PiGhp\Domain\Model\GuitarHeartsProject $guitarHeartsProject
     * @return void
     */
    public function showAction(\Michael\PiGhp\Domain\Model\GuitarHeartsProject $guitarHeartsProject)
    {
        $this->view->assign('guitarHeartsProject', $guitarHeartsProject);
    }

    public function cardAction() {
        $bar = "Hello World";
        $guitarHeartsProjects = $this->guitarHeartsProjectRepository->findAll();
        $this->view->assign('guitarHeartsProjects', $guitarHeartsProjects);
        $this->view->assign('foo', $bar);
    }
}
