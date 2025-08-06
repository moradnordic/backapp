<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblchequesemisXxx;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblchequesemisXxx>
 *
 * @method TblchequesemisXxx|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblchequesemisXxx|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblchequesemisXxx[]    findAll()
 * @method TblchequesemisXxx[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchequesemisXxxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblchequesemisXxx::class);
    }

//    /**
//     * @return TblchequesemisXxx[] Returns an array of TblchequesemisXxx objects
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

//    public function findOneBySomeField($value): ?TblchequesemisXxx
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
