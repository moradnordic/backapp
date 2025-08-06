<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FComptetmodele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptetmodele>
 *
 * @method FComptetmodele|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptetmodele|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptetmodele[]    findAll()
 * @method FComptetmodele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptetmodeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptetmodele::class);
    }

//    /**
//     * @return FComptetmodele[] Returns an array of FComptetmodele objects
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

//    public function findOneBySomeField($value): ?FComptetmodele
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
