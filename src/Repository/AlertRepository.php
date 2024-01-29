<?php

namespace Sesame\Bundle\JizoAlerts\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Sesame\Bundle\JizoAlerts\DTO\AlertDto;
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

    public function getAlert(AlertDto $alertDto)
    {
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Alert::class, 'a');

        $sql = 'CALL getOccurences(:rule_sid_rev,:protocol,:content,:date_time_from,:date_time_to,:src_ip,:flow_id,:dest_ip,:dest_port,:src_port,:signature,:app_proto,:severity,:state,:alert_category,:investigation_conclusion,:flag,:sid_excluded,:vlan_id,:offset,:limit)';

        $query = $this->entityManager->createNativeQuery($sql, $rsm);

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

