<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCaissecaissier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCaissecaissier>
 *
 * @method FCaissecaissier|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCaissecaissier|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCaissecaissier[]    findAll()
 * @method FCaissecaissier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCaissecaissierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCaissecaissier::class);
    }

//    /**
//     * @return FCaissecaissier[] Returns an array of FCaissecaissier objects
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

//    public function findOneBySomeField($value): ?FCaissecaissier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
