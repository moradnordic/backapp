<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PPreferences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PPreferences>
 *
 * @method PPreferences|null find($id, $lockMode = null, $lockVersion = null)
 * @method PPreferences|null findOneBy(array $criteria, array $orderBy = null)
 * @method PPreferences[]    findAll()
 * @method PPreferences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PPreferencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PPreferences::class);
    }

//    /**
//     * @return PPreferences[] Returns an array of PPreferences objects
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

//    public function findOneBySomeField($value): ?PPreferences
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
