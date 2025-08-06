<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDrecouvrementiv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDrecouvrementiv>
 *
 * @method FDrecouvrementiv|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDrecouvrementiv|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDrecouvrementiv[]    findAll()
 * @method FDrecouvrementiv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDrecouvrementivRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDrecouvrementiv::class);
    }

//    /**
//     * @return FDrecouvrementiv[] Returns an array of FDrecouvrementiv objects
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

//    public function findOneBySomeField($value): ?FDrecouvrementiv
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
