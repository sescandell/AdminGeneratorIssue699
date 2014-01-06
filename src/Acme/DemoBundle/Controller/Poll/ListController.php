<?php

namespace Acme\DemoBundle\Controller\Poll;

use Admingenerated\AcmeDemoBundle\BasePollController\ListController as BaseListController;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * ListController
 */
class ListController extends BaseListController
{
    /** @DI\Inject("doctrine.orm.entity_manager") */
    private $em;
}
