<?php
namespace Michael\PiGhp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class GuitarHeartsProjectTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Michael\PiGhp\Domain\Model\GuitarHeartsProject
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Michael\PiGhp\Domain\Model\GuitarHeartsProject();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
