<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblfrs>
 *
 * @method Tblfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblfrs[]    findAll()
 * @method Tblfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblfrs::class);
    }

//    /**
//     * @return Tblfrs[] Returns an array of Tblfrs objects
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

//    public function findOneBySomeField($value): ?Tblfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
