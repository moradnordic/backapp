<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FTicketarchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTicketarchive>
 *
 * @method FTicketarchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTicketarchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTicketarchive[]    findAll()
 * @method FTicketarchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTicketarchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTicketarchive::class);
    }

//    /**
//     * @return FTicketarchive[] Returns an array of FTicketarchive objects
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

//    public function findOneBySomeField($value): ?FTicketarchive
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
