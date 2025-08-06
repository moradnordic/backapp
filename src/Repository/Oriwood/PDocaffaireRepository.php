<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PDocaffaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PDocaffaire>
 *
 * @method PDocaffaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDocaffaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDocaffaire[]    findAll()
 * @method PDocaffaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDocaffaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDocaffaire::class);
    }

//    /**
//     * @return PDocaffaire[] Returns an array of PDocaffaire objects
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

//    public function findOneBySomeField($value): ?PDocaffaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
