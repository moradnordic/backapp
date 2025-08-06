<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PInterroress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterroress>
 *
 * @method PInterroress|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterroress|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterroress[]    findAll()
 * @method PInterroress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterroressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterroress::class);
    }

//    /**
//     * @return PInterroress[] Returns an array of PInterroress objects
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

//    public function findOneBySomeField($value): ?PInterroress
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
