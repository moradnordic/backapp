<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PCattarif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCattarif>
 *
 * @method PCattarif|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCattarif|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCattarif[]    findAll()
 * @method PCattarif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCattarifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCattarif::class);
    }

//    /**
//     * @return PCattarif[] Returns an array of PCattarif objects
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

//    public function findOneBySomeField($value): ?PCattarif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
