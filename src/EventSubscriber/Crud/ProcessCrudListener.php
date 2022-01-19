<?php

namespace CleverAge\ProcessUiBundle\EventSubscriber\Crud;

use CleverAge\ProcessUiBundle\Entity\Process;
use CleverAge\ProcessUiBundle\Repository\ProcessRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeCrudActionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ProcessCrudListener implements EventSubscriberInterface
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    /**
     * @return array <string, string>
     */
    public static function getSubscribedEvents(): array
    {
        return [BeforeCrudActionEvent::class => 'syncProcessIntoDatabase'];
    }

    public function syncProcessIntoDatabase(BeforeCrudActionEvent $event): void
    {
        if ($event->getAdminContext()?->getEntity()->getFqcn() === Process::class) {
            /** @var ProcessRepository $repository */
            $repository = $this->entityManager->getRepository(Process::class);
            $repository->sync();
        }
    }
}
