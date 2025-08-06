<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCmlien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCmlien>
 *
 * @method FCmlien|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCmlien|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCmlien[]    findAll()
 * @method FCmlien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCmlienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCmlien::class);
    }

//    /**
//     * @return FCmlien[] Returns an array of FCmlien objects
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

//    public function findOneBySomeField($value): ?FCmlien
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
