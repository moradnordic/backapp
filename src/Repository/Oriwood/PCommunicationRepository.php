<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PCommunication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCommunication>
 *
 * @method PCommunication|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCommunication|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCommunication[]    findAll()
 * @method PCommunication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCommunicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCommunication::class);
    }

//    /**
//     * @return PCommunication[] Returns an array of PCommunication objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PCommunication
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
