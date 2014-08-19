<?php

namespace Doctrine\Search;

use Elastica\Query;
use Elastica\ResultSet;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 */
class Paginator implements \Countable, \IteratorAggregate {
    private $query;
    private $resultSet;
    private $collection;
    /**
     * [__construct description]
     * @param \Elastica\Query $query [description]
     */
    public function __construct(Query $query) {
        $this->query = $query;
    }

    /**
     * [getQuery description]
     * @return \Elastica\Query [description]
     */
    public function getQuery() {
        return $this->query;
    }

    /**
     * [setResults description]
     * @param \Elastica\ResultSet $resultSet [description]
     * @return Paginator
     */
    public function setResults(ResultSet $resultSet) {
        $this->resultSet = $resultSet;
        return $this;
    }

    /**
     * [setHydratedResults description]
     * @param \Doctrine\Common\Collections\ArrayCollection $collection
     * @return Paginator
     */
    public function setHydratedResults(ArrayCollection $collection) {
        $this->collection = $collection;
        return $this;
    }

    /**
     * [getTotalHits description]
     * @return int [description]
     */
    public function getTotalHits() {
        return $this->resultSet->getTotalHits();
    }

    /**
     * [count description]
     * @return int [description]
     */
    public function count() {
        return count($this->collection);
    }

    /**
     * [getIterator description]
     * @return \ArrayIterator [description]
     */
    public function getIterator() {
        return $this->collection->getIterator();
    }
}
