<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PContremarqueliv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PContremarqueliv>
 *
 * @method PContremarqueliv|null find($id, $lockMode = null, $lockVersion = null)
 * @method PContremarqueliv|null findOneBy(array $criteria, array $orderBy = null)
 * @method PContremarqueliv[]    findAll()
 * @method PContremarqueliv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PContremarquelivRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PContremarqueliv::class);
    }

//    /**
//     * @return PContremarqueliv[] Returns an array of PContremarqueliv objects
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

//    public function findOneBySomeField($value): ?PContremarqueliv
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
