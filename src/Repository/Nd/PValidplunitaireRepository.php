<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PValidplunitaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PValidplunitaire>
 *
 * @method PValidplunitaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method PValidplunitaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method PValidplunitaire[]    findAll()
 * @method PValidplunitaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PValidplunitaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PValidplunitaire::class);
    }

//    /**
//     * @return PValidplunitaire[] Returns an array of PValidplunitaire objects
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

//    public function findOneBySomeField($value): ?PValidplunitaire
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
