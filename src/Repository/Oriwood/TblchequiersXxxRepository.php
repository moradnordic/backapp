<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblchequiersXxx;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblchequiersXxx>
 *
 * @method TblchequiersXxx|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblchequiersXxx|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblchequiersXxx[]    findAll()
 * @method TblchequiersXxx[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchequiersXxxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblchequiersXxx::class);
    }

//    /**
//     * @return TblchequiersXxx[] Returns an array of TblchequiersXxx objects
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

//    public function findOneBySomeField($value): ?TblchequiersXxx
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
