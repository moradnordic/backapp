<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblchiffredaffairescommemrciaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblchiffredaffairescommemrciaux>
 *
 * @method Tblchiffredaffairescommemrciaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblchiffredaffairescommemrciaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblchiffredaffairescommemrciaux[]    findAll()
 * @method Tblchiffredaffairescommemrciaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchiffredaffairescommemrciauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblchiffredaffairescommemrciaux::class);
    }

//    /**
//     * @return Tblchiffredaffairescommemrciaux[] Returns an array of Tblchiffredaffairescommemrciaux objects
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

//    public function findOneBySomeField($value): ?Tblchiffredaffairescommemrciaux
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
