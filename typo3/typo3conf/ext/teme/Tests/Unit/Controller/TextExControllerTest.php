<?php
namespace Me\Teme\Tests\Unit\Controller;

/**
 * Test case.
 */
class TextExControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Me\Teme\Controller\TextExController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Me\Teme\Controller\TextExController::class)
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
    public function listActionFetchesAllTexticesFromRepositoryAndAssignsThemToView()
    {

        $allTextices = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $textExRepository = $this->getMockBuilder(\Me\Teme\Domain\Repository\TextExRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $textExRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTextices));
        $this->inject($this->subject, 'textExRepository', $textExRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('textices', $allTextices);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTextExToView()
    {
        $textEx = new \Me\Teme\Domain\Model\TextEx();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('textEx', $textEx);

        $this->subject->showAction($textEx);
    }
}
