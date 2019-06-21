<?php
namespace SebastianChristoph\ScMessages\Controller;


/**
 * Class ChatController
 *
 * * @package SebastianChristoph\ScMessages\Controller
 */
class MessagesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * FeRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feRepository;

    /**
     * FeGroupRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feGroupRepository;

    /**
     * list action
     *
     * @return void
     */
    public function messagesAction()
    {
        var_dump($_POST);
        $this->view->assignMultiple([
            'test' => $GLOBALS['TSFE']->fe_user->user['username'],
            'testtest' => $GLOBALS['TSFE']->fe_user->user
        ]);
    }
}