<?php

namespace Doctrine\ODM\MongoDB;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

/**
 * @template T
 * @template-implements Selectable<int,T>
 * @template-implements ObjectRepository<T>
 */
class DocumentRepository implements ObjectRepository, Selectable
{
    /** @var string */
    protected $_entityName;

    /** @var EntityManagerInterface */
    protected $_em;

    /** @var Mapping\ClassMetadata */
    protected $_class;

    /** @param Mapping\ClassMetadata<T> $class */
    public function __construct(DocumentManager $dm, UnitOfWork $uow, Mapping\ClassMetadata $class) {}

    /**
     * @param int $lockMode
     * @param ?int $lockVersion
     * @return ?T
     */
    public function find($id, $lockMode = LockMode::NONE, $lockVersion = null) {}

    /** @return T[] */
    public function findAll() {}

    /**
     * @return T[]
     * @param ?int $limit
     * @param ?int $offset
     */
    public function findBy(array $criteria, ?array $sort = null, $limit = null, $skip = null) {}

    /** @return ?T */
    public function findOneBy(array $criteria, ?array $orderBy = null) {}
}
