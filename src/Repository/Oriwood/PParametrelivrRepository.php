<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PParametrelivr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PParametrelivr>
 *
 * @method PParametrelivr|null find($id, $lockMode = null, $lockVersion = null)
 * @method PParametrelivr|null findOneBy(array $criteria, array $orderBy = null)
 * @method PParametrelivr[]    findAll()
 * @method PParametrelivr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PParametrelivrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PParametrelivr::class);
    }

//    /**
//     * @return PParametrelivr[] Returns an array of PParametrelivr objects
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

//    public function findOneBySomeField($value): ?PParametrelivr
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
