<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PStatistique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PStatistique>
 *
 * @method PStatistique|null find($id, $lockMode = null, $lockVersion = null)
 * @method PStatistique|null findOneBy(array $criteria, array $orderBy = null)
 * @method PStatistique[]    findAll()
 * @method PStatistique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PStatistiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PStatistique::class);
    }

//    /**
//     * @return PStatistique[] Returns an array of PStatistique objects
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

//    public function findOneBySomeField($value): ?PStatistique
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
