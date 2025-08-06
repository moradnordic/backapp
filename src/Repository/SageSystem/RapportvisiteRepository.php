<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Rapportvisite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rapportvisite>
 *
 * @method Rapportvisite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rapportvisite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rapportvisite[]    findAll()
 * @method Rapportvisite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapportvisiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rapportvisite::class);
    }

//    /**
//     * @return Rapportvisite[] Returns an array of Rapportvisite objects
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

//    public function findOneBySomeField($value): ?Rapportvisite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
