<?php

namespace Sesame\Bundle\JizoAlert\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Sesame\Bundle\JizoAlert\Dto\AlertDto;
use Sesame\Bundle\JizoAlert\Entity\Alert;

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

    public function getAlert(AlertDto $alertDto): array
    {
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Alert::class, 'a');

        $query = $this->entityManager->createNativeQuery(AlertProcedures::GET_OCCURENCES, $rsm);

        foreach (get_object_vars($alertDto) as $param => $value) {
            $param = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $param));
            $query->setParameter($param, $value);
        }

        try {
            return $query->getResult();
        } catch (NoResultException | NonUniqueResultException $e) {
            dump($e);
            return $e;
        }
    }
}