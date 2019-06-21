<?php
namespace SebastianChristoph\ScMessages\Controller;

use SebastianChristoph\ScMessages\Domain\Model\Message;
use SebastianChristoph\ScMessages\Domain\Repository\MessageRepository;
/**
 * Class ChatController
 *
 * * @package SebastianChristoph\ScMessages\Controller
 */
class MessagesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * list action
     *
     * @return void
     */
    public function sendmessageAction()
    {
        var_dump('sendmessage');
    }
    public function messagelistAction()
    {
        $this->view->assignMultiple([
            'user' => $GLOBALS['TSFE']->fe_user->user,
            'test' => 'Test'
        ]);
    }
    public function messagedetailAction()
    {
        var_dump('messagedetail');
    }
}