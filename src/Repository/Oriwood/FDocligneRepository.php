<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDocligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocligne>
 *
 * @method FDocligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocligne[]    findAll()
 * @method FDocligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocligne::class);
    }

//    /**
//     * @return FDocligne[] Returns an array of FDocligne objects
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

//    public function findOneBySomeField($value): ?FDocligne
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
