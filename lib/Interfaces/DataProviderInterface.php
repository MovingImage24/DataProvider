<?php

namespace MovingImage\DataProvider\Interfaces;

use MovingImage\DataProvider\Wrapper\Video;

interface DataProviderInterface
{
    /**
     * Retrieve a Doctrine collection object containing videos that
     * match the criteria defined in the options.
     *
     * @return mixed
     */
    public function getAll(array $options);

    /**
     * Get the count of how many videos getData would yield.
     */
    public function getCount(array $options): int;

    /**
     * Get a single Video, which wraps both the Video entity and
     * the EmbedCode into a single object.
     */
    public function getOne(array $options): ?Video;
}
