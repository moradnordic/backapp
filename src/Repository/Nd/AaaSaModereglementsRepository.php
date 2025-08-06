<?php

namespace App\Repository\Nd;

use App\Entity\Nd\AaaSaModereglements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaSaModereglements>
 *
 * @method AaaSaModereglements|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaSaModereglements|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaSaModereglements[]    findAll()
 * @method AaaSaModereglements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaSaModereglementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaSaModereglements::class);
    }

//    /**
//     * @return AaaSaModereglements[] Returns an array of AaaSaModereglements objects
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

//    public function findOneBySomeField($value): ?AaaSaModereglements
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
