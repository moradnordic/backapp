<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\POrgaven;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POrgaven>
 *
 * @method POrgaven|null find($id, $lockMode = null, $lockVersion = null)
 * @method POrgaven|null findOneBy(array $criteria, array $orderBy = null)
 * @method POrgaven[]    findAll()
 * @method POrgaven[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POrgavenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POrgaven::class);
    }

//    /**
//     * @return POrgaven[] Returns an array of POrgaven objects
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

//    public function findOneBySomeField($value): ?POrgaven
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
