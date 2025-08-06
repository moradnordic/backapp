<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PCondlivr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCondlivr>
 *
 * @method PCondlivr|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCondlivr|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCondlivr[]    findAll()
 * @method PCondlivr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCondlivrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCondlivr::class);
    }

//    /**
//     * @return PCondlivr[] Returns an array of PCondlivr objects
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

//    public function findOneBySomeField($value): ?PCondlivr
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
