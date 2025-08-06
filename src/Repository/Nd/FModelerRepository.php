<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FModeler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FModeler>
 *
 * @method FModeler|null find($id, $lockMode = null, $lockVersion = null)
 * @method FModeler|null findOneBy(array $criteria, array $orderBy = null)
 * @method FModeler[]    findAll()
 * @method FModeler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FModelerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FModeler::class);
    }

//    /**
//     * @return FModeler[] Returns an array of FModeler objects
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

//    public function findOneBySomeField($value): ?FModeler
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
