<?php

namespace Sesame\Bundle\JizoAlerts\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Sesame\Bundle\JizoAlerts\Entity\Alert;

/**
 * @extends EntityRepository<Alert>
 *
 * @method Alert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alert[]    findAll()
 * @method Alert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlertRepository extends EntityRepository
{
    public function __construct(private EntityManager $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(Alert::class));
    }

    public function getAlert(int $id): ?Alert
    {
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Alert::class, 'a');

        $sql = 'CALL alert(:id)';

        $query = $this->entityManager->createNativeQuery($sql, $rsm);
        $query->setParameter('id', $id);

        try {
            return $query->getOneOrNullResult();
        } catch (NoResultException | NonUniqueResultException $e) {
            return null;
        }
    }
}

