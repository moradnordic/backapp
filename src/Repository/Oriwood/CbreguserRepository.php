<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Cbreguser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbreguser>
 *
 * @method Cbreguser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbreguser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbreguser[]    findAll()
 * @method Cbreguser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbreguserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbreguser::class);
    }

//    /**
//     * @return Cbreguser[] Returns an array of Cbreguser objects
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

//    public function findOneBySomeField($value): ?Cbreguser
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
