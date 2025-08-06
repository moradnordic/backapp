<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PNature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PNature>
 *
 * @method PNature|null find($id, $lockMode = null, $lockVersion = null)
 * @method PNature|null findOneBy(array $criteria, array $orderBy = null)
 * @method PNature[]    findAll()
 * @method PNature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PNatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PNature::class);
    }

//    /**
//     * @return PNature[] Returns an array of PNature objects
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

//    public function findOneBySomeField($value): ?PNature
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
