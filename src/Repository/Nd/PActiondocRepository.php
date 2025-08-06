<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PActiondoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PActiondoc>
 *
 * @method PActiondoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method PActiondoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method PActiondoc[]    findAll()
 * @method PActiondoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PActiondocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PActiondoc::class);
    }

//    /**
//     * @return PActiondoc[] Returns an array of PActiondoc objects
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

//    public function findOneBySomeField($value): ?PActiondoc
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
