<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Cbmessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbmessage>
 *
 * @method Cbmessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbmessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbmessage[]    findAll()
 * @method Cbmessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbmessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbmessage::class);
    }

//    /**
//     * @return Cbmessage[] Returns an array of Cbmessage objects
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

//    public function findOneBySomeField($value): ?Cbmessage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
