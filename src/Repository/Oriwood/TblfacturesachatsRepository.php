<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblfacturesachats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblfacturesachats>
 *
 * @method Tblfacturesachats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblfacturesachats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblfacturesachats[]    findAll()
 * @method Tblfacturesachats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblfacturesachatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblfacturesachats::class);
    }

//    /**
//     * @return Tblfacturesachats[] Returns an array of Tblfacturesachats objects
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

//    public function findOneBySomeField($value): ?Tblfacturesachats
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
