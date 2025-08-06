<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\ClientsNdOw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClientsNdOw>
 *
 * @method ClientsNdOw|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsNdOw|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsNdOw[]    findAll()
 * @method ClientsNdOw[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsNdOwRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientsNdOw::class);
    }

//    /**
//     * @return ClientsNdOw[] Returns an array of ClientsNdOw objects
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

//    public function findOneBySomeField($value): ?ClientsNdOw
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
