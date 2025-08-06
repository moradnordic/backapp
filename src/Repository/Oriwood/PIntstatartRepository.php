<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PIntstatart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PIntstatart>
 *
 * @method PIntstatart|null find($id, $lockMode = null, $lockVersion = null)
 * @method PIntstatart|null findOneBy(array $criteria, array $orderBy = null)
 * @method PIntstatart[]    findAll()
 * @method PIntstatart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PIntstatartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PIntstatart::class);
    }

//    /**
//     * @return PIntstatart[] Returns an array of PIntstatart objects
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

//    public function findOneBySomeField($value): ?PIntstatart
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
