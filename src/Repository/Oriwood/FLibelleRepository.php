<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FLibelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLibelle>
 *
 * @method FLibelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLibelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLibelle[]    findAll()
 * @method FLibelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLibelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLibelle::class);
    }

//    /**
//     * @return FLibelle[] Returns an array of FLibelle objects
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

//    public function findOneBySomeField($value): ?FLibelle
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
