<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsSettings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsSettings>
 *
 * @method TbsSettings|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsSettings|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsSettings[]    findAll()
 * @method TbsSettings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsSettingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsSettings::class);
    }

//    /**
//     * @return TbsSettings[] Returns an array of TbsSettings objects
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

//    public function findOneBySomeField($value): ?TbsSettings
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
