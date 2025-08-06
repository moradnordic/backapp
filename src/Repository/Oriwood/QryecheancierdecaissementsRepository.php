<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Qryecheancierdecaissements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Qryecheancierdecaissements>
 *
 * @method Qryecheancierdecaissements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qryecheancierdecaissements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qryecheancierdecaissements[]    findAll()
 * @method Qryecheancierdecaissements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QryecheancierdecaissementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qryecheancierdecaissements::class);
    }

//    /**
//     * @return Qryecheancierdecaissements[] Returns an array of Qryecheancierdecaissements objects
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

//    public function findOneBySomeField($value): ?Qryecheancierdecaissements
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
