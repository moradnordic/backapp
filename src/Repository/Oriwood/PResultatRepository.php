<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PResultat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PResultat>
 *
 * @method PResultat|null find($id, $lockMode = null, $lockVersion = null)
 * @method PResultat|null findOneBy(array $criteria, array $orderBy = null)
 * @method PResultat[]    findAll()
 * @method PResultat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PResultatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PResultat::class);
    }

//    /**
//     * @return PResultat[] Returns an array of PResultat objects
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

//    public function findOneBySomeField($value): ?PResultat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
