<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbltarifEntete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbltarifEntete>
 *
 * @method TbltarifEntete|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbltarifEntete|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbltarifEntete[]    findAll()
 * @method TbltarifEntete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltarifEnteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbltarifEntete::class);
    }

//    /**
//     * @return TbltarifEntete[] Returns an array of TbltarifEntete objects
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

//    public function findOneBySomeField($value): ?TbltarifEntete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
