<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEcrituref;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcrituref>
 *
 * @method FEcrituref|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcrituref|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcrituref[]    findAll()
 * @method FEcrituref[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcriturefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcrituref::class);
    }

//    /**
//     * @return FEcrituref[] Returns an array of FEcrituref objects
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

//    public function findOneBySomeField($value): ?FEcrituref
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
