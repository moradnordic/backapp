<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCaisse>
 *
 * @method FCaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCaisse[]    findAll()
 * @method FCaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCaisse::class);
    }

//    /**
//     * @return FCaisse[] Returns an array of FCaisse objects
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

//    public function findOneBySomeField($value): ?FCaisse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
