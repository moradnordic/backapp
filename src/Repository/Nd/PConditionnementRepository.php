<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PConditionnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PConditionnement>
 *
 * @method PConditionnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PConditionnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PConditionnement[]    findAll()
 * @method PConditionnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PConditionnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PConditionnement::class);
    }

//    /**
//     * @return PConditionnement[] Returns an array of PConditionnement objects
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

//    public function findOneBySomeField($value): ?PConditionnement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
