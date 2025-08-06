<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Typecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typecom>
 *
 * @method Typecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typecom[]    findAll()
 * @method Typecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typecom::class);
    }

//    /**
//     * @return Typecom[] Returns an array of Typecom objects
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

//    public function findOneBySomeField($value): ?Typecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
