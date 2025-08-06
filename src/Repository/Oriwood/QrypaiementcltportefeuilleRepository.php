<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Qrypaiementcltportefeuille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Qrypaiementcltportefeuille>
 *
 * @method Qrypaiementcltportefeuille|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qrypaiementcltportefeuille|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qrypaiementcltportefeuille[]    findAll()
 * @method Qrypaiementcltportefeuille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QrypaiementcltportefeuilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qrypaiementcltportefeuille::class);
    }

//    /**
//     * @return Qrypaiementcltportefeuille[] Returns an array of Qrypaiementcltportefeuille objects
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

//    public function findOneBySomeField($value): ?Qrypaiementcltportefeuille
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
