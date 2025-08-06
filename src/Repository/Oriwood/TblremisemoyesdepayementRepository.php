<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblremisemoyesdepayement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblremisemoyesdepayement>
 *
 * @method Tblremisemoyesdepayement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblremisemoyesdepayement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblremisemoyesdepayement[]    findAll()
 * @method Tblremisemoyesdepayement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblremisemoyesdepayementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblremisemoyesdepayement::class);
    }

//    /**
//     * @return Tblremisemoyesdepayement[] Returns an array of Tblremisemoyesdepayement objects
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

//    public function findOneBySomeField($value): ?Tblremisemoyesdepayement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
