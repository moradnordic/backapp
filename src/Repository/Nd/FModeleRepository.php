<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FModele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FModele>
 *
 * @method FModele|null find($id, $lockMode = null, $lockVersion = null)
 * @method FModele|null findOneBy(array $criteria, array $orderBy = null)
 * @method FModele[]    findAll()
 * @method FModele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FModeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FModele::class);
    }

//    /**
//     * @return FModele[] Returns an array of FModele objects
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

//    public function findOneBySomeField($value): ?FModele
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
