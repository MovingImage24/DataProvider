<?php

namespace MovingImage\DataProvider\Interfaces;

/**
 * Interface DataProviderInterface.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface DataProviderInterface
{
    /**
     * Retrieve a Doctrine collection object containing videos that
     * match the criteria defined in the options.
     *
     * @param array $options
     *
     * @return mixed
     */
    public function getData(array $options);

    /**
     * Get the count of how many videos getData would yield.
     *
     * @param array $options
     *
     * @return int
     */
    public function getCount(array $options);
}
