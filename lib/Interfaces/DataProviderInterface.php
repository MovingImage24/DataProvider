<?php

namespace MovingImage\DataProvider\Interfaces;

use MovingImage\DataProvider\Wrapper\Video;

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
    public function getAll(array $options);

    /**
     * Get the count of how many videos getData would yield.
     *
     * @param array $options
     *
     * @return int
     */
    public function getCount(array $options);

    /**
     * Get a single Video, which wraps both the Video entity and
     * the EmbedCode into a single object.
     *
     * @param array $options
     *
     * @return Video
     */
    public function getOne(array $options);
}
