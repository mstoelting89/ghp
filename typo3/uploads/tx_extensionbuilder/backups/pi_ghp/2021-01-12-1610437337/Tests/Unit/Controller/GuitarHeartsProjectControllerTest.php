<?php
namespace Michael\PiGhp\Tests\Unit\Controller;

/**
 * Test case.
 */
class GuitarHeartsProjectControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Michael\PiGhp\Controller\GuitarHeartsProjectController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Michael\PiGhp\Controller\GuitarHeartsProjectController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllGuitarHeartsProjectsFromRepositoryAndAssignsThemToView()
    {

        $allGuitarHeartsProjects = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $guitarHeartsProjectRepository = $this->getMockBuilder(\Michael\PiGhp\Domain\Repository\GuitarHeartsProjectRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $guitarHeartsProjectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGuitarHeartsProjects));
        $this->inject($this->subject, 'guitarHeartsProjectRepository', $guitarHeartsProjectRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('guitarHeartsProjects', $allGuitarHeartsProjects);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGuitarHeartsProjectToView()
    {
        $guitarHeartsProject = new \Michael\PiGhp\Domain\Model\GuitarHeartsProject();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('guitarHeartsProject', $guitarHeartsProject);

        $this->subject->showAction($guitarHeartsProject);
    }
}
