<?php
namespace Pi\OwnBlog\Controller;


/***
 *
 * This file is part of the "Blog" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 
 *
 ***/
/**
 * BlogController
 */
class BlogController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * blogRepository
     * 
     * @var \Pi\OwnBlog\Domain\Repository\BlogRepository
     */
    protected $blogRepository = null;

    /**
     * @param \Pi\OwnBlog\Domain\Repository\BlogRepository $blogRepository
     */
    public function injectBlogRepository(\Pi\OwnBlog\Domain\Repository\BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $blogs = $this->blogRepository->findAll();
        $this->view->assign('blogs', $blogs);
    }

    /**
     * action show
     * 
     * @param \Pi\OwnBlog\Domain\Model\Blog $blog
     * @return void
     */
    public function showAction(\Pi\OwnBlog\Domain\Model\Blog $blog)
    {
        $this->view->assign('blog', $blog);
    }
}
