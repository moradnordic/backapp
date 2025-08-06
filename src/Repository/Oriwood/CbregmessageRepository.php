<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Cbregmessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbregmessage>
 *
 * @method Cbregmessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbregmessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbregmessage[]    findAll()
 * @method Cbregmessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbregmessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbregmessage::class);
    }

//    /**
//     * @return Cbregmessage[] Returns an array of Cbregmessage objects
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

//    public function findOneBySomeField($value): ?Cbregmessage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
