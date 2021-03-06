<?php

namespace Doctrine\Search\Exception;

/**
 * Exception thrown when an search query unexpectedly does not return any results.
 *
 * @author robo
 * @since 2.0
 */
class NoResultException extends DoctrineSearchException
{
    public function __construct($message = null)
    {
        parent::__construct($message ?: 'No result was found for query although at least one row was expected.');
    }
}
