<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FAfficheurcaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAfficheurcaisse>
 *
 * @method FAfficheurcaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAfficheurcaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAfficheurcaisse[]    findAll()
 * @method FAfficheurcaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAfficheurcaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAfficheurcaisse::class);
    }

//    /**
//     * @return FAfficheurcaisse[] Returns an array of FAfficheurcaisse objects
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

//    public function findOneBySomeField($value): ?FAfficheurcaisse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
